<?php

namespace App\Service;

class BadWordsFilterService
{
    /**
     * Liste simple FR + EN.
     * Tu peux l’agrandir après.
     * @var array<int, string>
     */
    private array $badWords = [
        // Français
        'merde',
        'putain',
        'connard',
        'connasse',
        'con',
        'salope',
        'salop',
        'enculé',
        'encule',
        'fdp',
        'nique',
        'ta gueule',
        'idiot',
        'imbecile',
        'imbécile',
        'batard',
        'bâtard',
        'crétin',
        'cretin',

        // Anglais
        'shit',
        'fuck',
        'fucking',
        'bitch',
        'asshole',
        'bastard',
        'dumbass',
        'idiot',
        'stupid',
        'motherfucker',
        'mf',
        'son of a bitch',
    ];

    /**
     * @return array{allowed: bool, matchedWords: list<string>, cleanedText: string}
     */
    public function analyze(string $text): array
    {
        $originalText = trim($text);

        if ($originalText === '') {
            return [
                'allowed' => true,
                'matchedWords' => [],
                'cleanedText' => $originalText,
            ];
        }

        $normalizedText = $this->normalizeText($originalText);
        $matchedWords = [];

        foreach ($this->badWords as $badWord) {
            $normalizedBadWord = $this->normalizeText($badWord);

            if ($normalizedBadWord === '') {
                continue;
            }

            // Détection avec bordure de mot
            $pattern = '/(^|[\s\p{P}])' . preg_quote($normalizedBadWord, '/') . '($|[\s\p{P}])/iu';

            if (preg_match($pattern, ' ' . $normalizedText . ' ')) {
                $matchedWords[] = $badWord;
            }
        }

        $matchedWords = array_values(array_unique($matchedWords));

        return [
            'allowed' => count($matchedWords) === 0,
            'matchedWords' => $matchedWords,
            'cleanedText' => $originalText,
        ];
    }

    private function normalizeText(string $text): string
    {
        $text = mb_strtolower($text, 'UTF-8');

        // Remplacer quelques caractères utilisés pour contourner le filtre
        $replacements = [
            '0' => 'o',
            '1' => 'i',
            '3' => 'e',
            '4' => 'a',
            '@' => 'a',
            '$' => 's',
            '!' => 'i',
            '+' => 't',
        ];

        $text = strtr($text, $replacements);

        // Enlever les accents
        $text = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text) ?: $text;
        $text = mb_strtolower($text, 'UTF-8');

        // Garder lettres, chiffres, espaces, ponctuation simple
        $text = (string) preg_replace('/[^\p{L}\p{N}\s\p{P}]/u', ' ', $text);
        $text = (string) preg_replace('/\s+/', ' ', $text);

        return trim($text);
    }
}