<?php

namespace App\Service;

use App\Entity\Hebergement;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\UploadedFile;
// use Symfony\Contracts\HttpClient\HttpClientInterface;

class HebergementAiAssistant
{
    // private string $apiKey;
    // private string $model;

    public function __construct(
        #[Autowire('%kernel.project_dir%')]
        private readonly string $projectDir,
    ) {
        // OpenAI désactivé, plus de clé ni de modèle
    }

    /**
     * @param array<int, array{label?: string, path?: string, file?: UploadedFile}> $photoSources
     */
    public function analyze(Hebergement $hebergement, array $photoSources = []): array
    {
        $normalizedPhotos = $this->normalizePhotoSources($photoSources);
        $localResult = $this->buildLocalAnalysis($hebergement, $normalizedPhotos);
        $localResult['analysisMode'] = 'local';
        $localResult['photoCount'] = count($normalizedPhotos);
        $localResult['photoSources'] = array_map(
            static fn(array $photo): array => [
                'label' => $photo['label'],
                'kind' => $photo['kind'],
            ],
            $normalizedPhotos
        );
        return $localResult;
    }

    /**
     * @param array<int, array{label?: string, path?: string, file?: UploadedFile}> $photoSources
     * @return array<int, array{label: string, kind: string, path?: string, file?: UploadedFile}>
     */
    private function normalizePhotoSources(array $photoSources): array
    {
        $normalized = [];

        foreach (array_values($photoSources) as $index => $photoSource) {
            if (!is_array($photoSource)) {
                continue;
            }

            $label = trim((string) ($photoSource['label'] ?? 'Photo ' . ($index + 1)));
            $file = $photoSource['file'] ?? null;
            $path = trim((string) ($photoSource['path'] ?? ''));

            if ($file instanceof UploadedFile) {
                $normalized[] = [
                    'label' => $label,
                    'kind' => 'upload',
                    'file' => $file,
                ];
                continue;
            }

            if ($path !== '') {
                $normalized[] = [
                    'label' => $label,
                    'kind' => 'stored',
                    'path' => $path,
                ];
            }
        }

        return array_slice($normalized, 0, 12);
    }

    /**
     * @param array<int, array{label: string, kind: string, path?: string, file?: UploadedFile}> $photoSources
     */
    // L'analyse OpenAI est désactivée
    // private function analyzeWithOpenAi(Hebergement $hebergement, array $photoSources): ?array { return null; }

    /**
     * @param array<int, array{label: string, kind: string, path?: string, file?: UploadedFile}> $photoSources
     */
    private function buildLocalAnalysis(Hebergement $hebergement, array $photoSources): array
    {
        $photoCount = count($photoSources);
        $photoDiagnostics = $this->buildPhotoDiagnostics($photoSources);
        $type = $this->cleanValue($hebergement->getType());
        $name = $this->cleanValue($hebergement->getNom());
        $location = $this->cleanValue($hebergement->getLocalisation());
        $price = $this->cleanValue($hebergement->getPrixParNuit());
        $description = trim((string) $hebergement->getDescription());
        $descriptionLength = mb_strlen($description);

        usort($photoDiagnostics, static fn(array $a, array $b): int => ($b['score'] ?? 0) <=> ($a['score'] ?? 0));

        $scoreProfile = $this->getScoreProfile();
        $photoScores = array_map(static fn(array $row): int => (int) ($row['score'] ?? 0), $photoDiagnostics);
        $photoAverage = $photoScores !== [] ? array_sum($photoScores) / count($photoScores) : 0.0;
        $bestPhotoScore = $photoScores !== [] ? max($photoScores) : 0;
        $worstPhotoScore = $photoScores !== [] ? min($photoScores) : 0;
        $photoSpread = $bestPhotoScore - $worstPhotoScore;

        $score = (int) round(18
            + ($photoAverage * $scoreProfile['photoAverageWeight'])
            + ($bestPhotoScore * $scoreProfile['bestPhotoWeight'])
            + ($worstPhotoScore * $scoreProfile['worstPhotoWeight'])
            + min($scoreProfile['photoCountCap'], $photoCount * $scoreProfile['photoCountStep'])
            + ($descriptionLength >= 120 ? $scoreProfile['descriptionLongBonus'] : ($descriptionLength >= 60 ? $scoreProfile['descriptionMediumBonus'] : 0))
            + ($name !== '' ? $scoreProfile['nameBonus'] : 0)
            + ($location !== '' ? $scoreProfile['locationBonus'] : 0)
            + ($price !== '' ? $scoreProfile['priceBonus'] : 0)
            + $this->computeContentDiversityBonus($photoDiagnostics, $scoreProfile['contentDiversityBonus'])
            - count($this->inferMissingPhotoAngles($photoSources)) * $scoreProfile['missingPhotoPenalty']
            - ($photoCount === 0 ? $scoreProfile['emptyGalleryPenalty'] : 0)
            - ($photoSpread >= 35 ? $scoreProfile['spreadPenalty'] : 0)
        );

        if ($photoCount >= 4 && $bestPhotoScore >= 75) {
            $score += $scoreProfile['strongGalleryBonus'];
        }

        if ($photoCount < 3) {
            $score -= $scoreProfile['shortGalleryPenalty'];
        }

        if ($descriptionLength < 40) {
            $score -= $scoreProfile['shortDescriptionPenalty'];
        }

        $score = max(0, min(100, $score));

        $bestPhotos = [];
        $photoRemarks = [];
        foreach ($photoDiagnostics as $index => $diagnostic) {
            $remark = $this->buildPhotoRemark($diagnostic, $type, $location, $index, $photoCount);

            $bestPhotos[] = [
                'label' => (string) ($diagnostic['label'] ?? ('Photo ' . ($index + 1))),
                'rank' => $index + 1,
                'why' => (string) ($diagnostic['strength'] ?? 'Bonne candidate pour l’annonce.'),
                'scene' => (string) ($diagnostic['scene'] ?? 'generic'),
                'sceneLabel' => $this->getSceneLabel((string) ($diagnostic['scene'] ?? 'generic')),
            ];

            $photoRemarks[] = [
                'label' => (string) ($diagnostic['label'] ?? ('Photo ' . ($index + 1))),
                'score' => (int) ($diagnostic['score'] ?? 0),
                'remark' => $remark,
                'why' => (string) ($diagnostic['strength'] ?? ''),
                'action' => (string) ($diagnostic['action'] ?? ''),
                'scene' => (string) ($diagnostic['scene'] ?? 'generic'),
                'sceneLabel' => $this->getSceneLabel((string) ($diagnostic['scene'] ?? 'generic')),
            ];
        }

        $photosToImprove = [];
        $seenImproveKeys = [];
        foreach ($photoDiagnostics as $diagnostic) {
            if ((int) ($diagnostic['score'] ?? 0) >= 62) {
                continue;
            }

            $improveKey = md5((string) ($diagnostic['label'] ?? '') . '|' . (string) ($diagnostic['scene'] ?? '') . '|' . (string) ($diagnostic['action'] ?? ''));
            if (isset($seenImproveKeys[$improveKey])) {
                continue;
            }
            $seenImproveKeys[$improveKey] = true;

            $photosToImprove[] = [
                'label' => (string) ($diagnostic['label'] ?? 'Photo'),
                'why' => (string) ($diagnostic['weakness'] ?? 'Cette photo a un impact commercial limité.'),
                'action' => (string) ($diagnostic['action'] ?? 'Reprendre la photo en lumière naturelle et plan plus large.'),
            ];
        }

        $missingPhotos = $this->inferMissingPhotoAngles($photoSources);
        if ($photoCount < 4 && !in_array('Ajouter une photo extérieure ou de la vue depuis le logement.', $missingPhotos, true)) {
            $missingPhotos[] = 'Ajouter une photo extérieure ou de la vue depuis le logement.';
        }

        // Extract detected services and generate specific recommendations
        $detectedServices = $this->extractDetectedServices($photoDiagnostics);
        $recommendations = [
            $this->buildRecommendationsSummary($photoDiagnostics, $photoCount, $type),
        ];
        
        // Add dynamic, specific recommendations based on detected services and missing angles
        $recommendations = array_merge($recommendations, $this->buildSpecificRecommendations($photoDiagnostics, $detectedServices, $missingPhotos, $type, $location));

        foreach ($photosToImprove as $item) {
            $recommendations[] = sprintf('%s: %s', (string) $item['label'], (string) $item['action']);
        }

        $recommendations = array_slice(array_values(array_unique($recommendations)), 0, 8);

        $descriptionSuggestion = $this->buildLocalDescriptionSuggestion(
            $name,
            $type,
            $location,
            $photoCount,
            $description,
            $bestPhotos,
            $price,
            $photoDiagnostics
        );

        $coverPhoto = $photoDiagnostics[0]['label'] ?? ($photoSources[0]['label'] ?? 'Photo principale');
        $summary = $this->buildSummaryText($score, $photoCount, $photoDiagnostics, $type, $location, $missingPhotos);

        return $this->normalizeAnalysisPayload([
            'score' => $score,
            'best_cover_photo' => $coverPhoto,
            'best_photos' => $bestPhotos,
            'photo_remarks' => $photoRemarks,
            'photos_to_improve' => $photosToImprove,
            'missing_photos' => $missingPhotos,
            'description_suggestion' => $descriptionSuggestion,
            'recommendation_summary' => $summary,
            'recommendations' => $recommendations,
        ], $photoSources, false);
    }

    /**
     * @param array<int, array{label: string, kind: string, path?: string, file?: UploadedFile}> $photoSources
     */
    private function normalizeAnalysisPayload(array $payload, array $photoSources, bool $fromOpenAi): array
    {
        $score = (int) ($payload['score'] ?? 0);
        $score = max(0, min(100, $score));

        $bestPhotos = $this->normalizeNestedList($payload['best_photos'] ?? []);
        $photoRemarks = $this->normalizePhotoRemarks($payload['photo_remarks'] ?? []);
        $photosToImprove = $this->normalizeNestedList($payload['photos_to_improve'] ?? []);
        $missingPhotos = $this->normalizeStringList($payload['missing_photos'] ?? []);
        $recommendations = $this->normalizeStringList($payload['recommendations'] ?? []);
        $descriptionSuggestion = trim((string) ($payload['description_suggestion'] ?? ''));
        $summary = trim((string) ($payload['recommendation_summary'] ?? ''));
        $coverPhoto = trim((string) ($payload['best_cover_photo'] ?? ''));

        if ($coverPhoto === '' && $photoSources !== []) {
            $coverPhoto = $photoSources[0]['label'];
        }

        if ($photoRemarks === [] && $bestPhotos !== []) {
            foreach ($bestPhotos as $item) {
                $photoRemarks[] = [
                    'label' => (string) ($item['label'] ?? 'Photo'),
                    'score' => isset($item['rank']) ? max(0, 100 - ((int) $item['rank'] * 7)) : 50,
                    'remark' => trim((string) ($item['why'] ?? 'Photo utile pour l’annonce.')),
                    'why' => trim((string) ($item['why'] ?? '')),
                    'action' => 'Conserver cette photo dans la sélection finale.',
                ];
            }
        }

        if ($descriptionSuggestion === '') {
            $descriptionSuggestion = $this->buildLocalDescriptionSuggestion(
                $this->cleanValue($photoSources[0]['label'] ?? 'hébergement'),
                '',
                '',
                count($photoSources),
                ''
            );
        }

        if ($summary === '') {
            $summary = $fromOpenAi
                ? 'Analyse IA générée avec succès.'
                : 'Analyse locale basée sur les données disponibles.';
        }

        return [
            'score' => $score,
            'bestCoverPhoto' => $coverPhoto,
            'bestPhotos' => $bestPhotos,
            'photoRemarks' => $photoRemarks,
            'photosToImprove' => $photosToImprove,
            'missingPhotos' => $missingPhotos,
            'descriptionSuggestion' => $descriptionSuggestion,
            'recommendationSummary' => $summary,
            'recommendations' => $recommendations,
        ];
    }

    private function resolvePhotoToDataUri(array $photoSource): ?string
    {
        $binary = null;
        $mimeType = 'image/jpeg';

        if (($photoSource['kind'] ?? '') === 'upload' && ($photoSource['file'] ?? null) instanceof UploadedFile) {
            $file = $photoSource['file'];
            $path = $file->getPathname();
            $binary = @file_get_contents($path);
            $mimeType = $file->getMimeType() ?: $file->getClientMimeType() ?: 'image/jpeg';
        } elseif (($photoSource['kind'] ?? '') === 'stored' && is_string($photoSource['path'] ?? null)) {
            $path = $this->resolveStoredPath((string) $photoSource['path']);
            if (!is_file($path)) {
                return null;
            }

            $binary = @file_get_contents($path);
            $mimeType = mime_content_type($path) ?: 'image/jpeg';
        }

        if (!is_string($binary) || $binary === '') {
            return null;
        }

        // Compress image for API to avoid timeouts
        $binary = $this->compressImageForApi($binary, $mimeType);
        if ($binary === null || $binary === '') {
            return null;
        }

        return sprintf('data:%s;base64,%s', $mimeType, base64_encode($binary));
    }

    private function compressImageForApi(string $binary, string &$mimeType): ?string
    {
        $originalSize = strlen($binary);
        $maxSize = 300 * 1024; // 300 KB max per image

        // If already small enough, return as-is
        if ($originalSize < $maxSize) {
            return $binary;
        }

        error_log("Image size {$originalSize} bytes exceeds limit, attempting compression...");

        // Try to use GD to compress image
        if (!extension_loaded('gd')) {
            error_log('GD extension not available for image compression');
            return $binary;
        }

        try {
            $tempFile = tempnam(sys_get_temp_dir(), 'img_');
            if ($tempFile === false) {
                return $binary;
            }

            file_put_contents($tempFile, $binary);
            $image = imagecreatefromstring($binary);
            if ($image === false) {
                unlink($tempFile);
                return $binary;
            }

            $width = imagesx($image);
            $height = imagesy($image);
            
            // Resize if image is large
            if ($width > 1200 || $height > 1200) {
                $scale = min(1200 / max($width, $height), 1);
                $newWidth = (int) ($width * $scale);
                $newHeight = (int) ($height * $scale);
                
                $resized = imagecreatetruecolor($newWidth, $newHeight);
                if ($resized !== false) {
                    imagecopyresampled($resized, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
                    imagedestroy($image);
                    $image = $resized;
                }
            }

            // Compress to JPEG with reducing quality until under limit
            $quality = 85;
            do {
                ob_start();
                imagejpeg($image, null, $quality);
                $compressed = (string) ob_get_clean();
                
                if (strlen($compressed) < $maxSize || $quality <= 40) {
                    imagedestroy($image);
                    unlink($tempFile);
                    $mimeType = 'image/jpeg';
                    error_log("Image compressed to " . strlen($compressed) . " bytes at quality {$quality}");
                    return $compressed;
                }

                $quality -= 10;
            } while ($quality >= 40);

            imagedestroy($image);
            unlink($tempFile);
        } catch (\Throwable $e) {
            error_log('Image compression failed: ' . $e->getMessage());
        }

        return $binary; // Return original if compression fails
    }

    private function resolveStoredPath(string $path): string
    {
        $cleanPath = ltrim($path, '/');

        return $this->projectDir . '/public/' . $cleanPath;
    }

    private function decodeJsonPayload(string $content): ?array
    {
        $content = trim($content);

        if ($content === '') {
            return null;
        }

        if (str_starts_with($content, '```')) {
            $content = preg_replace('/^```(?:json)?\s*/i', '', $content) ?? $content;
            $content = preg_replace('/\s*```$/', '', $content) ?? $content;
        }

        $decoded = json_decode($content, true);
        if (is_array($decoded)) {
            return $decoded;
        }

        if (preg_match('/\{.*\}/s', $content, $matches) === 1) {
            $decoded = json_decode($matches[0], true);
            if (is_array($decoded)) {
                return $decoded;
            }
        }

        return null;
    }

    /**
     * @param array<int, mixed> $items
     * @return array<int, string>
     */
    private function normalizeStringList(array $items): array
    {
        $normalized = [];

        foreach ($items as $item) {
            if (!is_scalar($item)) {
                continue;
            }

            $value = trim((string) $item);
            if ($value !== '') {
                $normalized[] = $value;
            }
        }

        return array_values(array_unique($normalized));
    }

    /**
     * @param array<int, mixed> $items
     * @return array<int, array<string, mixed>>
     */
    private function normalizeNestedList(array $items): array
    {
        $normalized = [];

        foreach ($items as $item) {
            if (is_scalar($item)) {
                $label = trim((string) $item);
                if ($label !== '') {
                    $normalized[] = [
                        'label' => $label,
                        'rank' => null,
                        'why' => '',
                    ];
                }

                continue;
            }

            if (!is_array($item)) {
                continue;
            }

            $label = trim((string) ($item['label'] ?? $item['name'] ?? ''));
            if ($label === '') {
                continue;
            }

            $normalized[] = [
                'label' => $label,
                'rank' => isset($item['rank']) ? (int) $item['rank'] : null,
                'why' => trim((string) ($item['why'] ?? '')),
                'scene' => trim((string) ($item['scene'] ?? '')),
                'sceneLabel' => trim((string) ($item['sceneLabel'] ?? $item['scene_label'] ?? '')),
            ];

            if ($normalized[array_key_last($normalized)]['sceneLabel'] === '' && $normalized[array_key_last($normalized)]['scene'] !== '') {
                $scene = (string) $normalized[array_key_last($normalized)]['scene'];
                $normalized[array_key_last($normalized)]['sceneLabel'] = $this->getSceneLabel($scene);
            }
        }

        return $normalized;
    }

    /**
     * @param array<int, mixed> $items
     * @return array<int, array<string, mixed>>
     */
    private function normalizePhotoRemarks(array $items): array
    {
        $normalized = [];

        foreach ($items as $item) {
            if (is_scalar($item)) {
                $label = trim((string) $item);
                if ($label !== '') {
                    $normalized[] = [
                        'label' => $label,
                        'score' => null,
                        'remark' => $label,
                        'why' => '',
                        'action' => '',
                    ];
                }

                continue;
            }

            if (!is_array($item)) {
                continue;
            }

            $label = trim((string) ($item['label'] ?? $item['name'] ?? ''));
            if ($label === '') {
                continue;
            }

            $remark = trim((string) ($item['remark'] ?? $item['comment'] ?? $item['why'] ?? ''));

            $normalized[] = [
                'label' => $label,
                'score' => isset($item['score']) ? (int) $item['score'] : null,
                'remark' => $remark !== '' ? $remark : $label,
                'why' => trim((string) ($item['why'] ?? '')),
                'action' => trim((string) ($item['action'] ?? '')),
                'scene' => trim((string) ($item['scene'] ?? '')),
                'sceneLabel' => trim((string) ($item['sceneLabel'] ?? $item['scene_label'] ?? '')),
            ];

            if ($normalized[array_key_last($normalized)]['sceneLabel'] === '' && $normalized[array_key_last($normalized)]['scene'] !== '') {
                $scene = (string) $normalized[array_key_last($normalized)]['scene'];
                $normalized[array_key_last($normalized)]['sceneLabel'] = $this->getSceneLabel($scene);
            }
        }

        return $normalized;
    }

    /**
     * @param array<int, array<string, mixed>> $bestPhotos
     * @param array<int, array<string, mixed>> $photoDiagnostics
     */
    private function buildLocalDescriptionSuggestion(
        string $name,
        string $type,
        string $location,
        int $photoCount,
        string $currentDescription,
        array $bestPhotos = [],
        string $price = '',
        array $photoDiagnostics = []
    ): string
    {
        $typeText = $type !== '' ? mb_strtolower($type) : 'hébergement';
        $locationText = $location !== '' ? $location : 'un emplacement pratique';
        $nameText = $name !== '' ? $name : ('Votre ' . $typeText);
        $priceText = $price !== '' ? sprintf('à partir de %s€ par nuit', $price) : 'avec un bon rapport qualité/prix';
        $photoLead = $bestPhotos[0]['label'] ?? 'la meilleure photo de la galerie';
        $primaryScene = $this->inferDominantSceneFromPhotos($bestPhotos);
        $photoTone = $photoCount >= 5
            ? sprintf('La galerie est déjà riche et structurée, avec une couverture forte (%s) qui rassure vite le visiteur.', $photoLead)
            : ($photoCount >= 3
                ? sprintf('La galerie montre déjà l’essentiel, mais la meilleure photo de couverture devrait rester %s.', $photoLead)
                : 'Ajoute plus de visuels pour donner plus de confiance avant réservation.');

        $sceneTone = $primaryScene !== ''
            ? $this->buildSceneDescriptionCue($primaryScene, $typeText, $locationText)
            : '';

        $benefitTone = $currentDescription !== ''
            ? 'Reformule la description pour mettre en avant les bénéfices clients, puis garde un style court, concret et vendeur.'
            : 'Insiste sur le confort, la propreté, la luminosité, l’emplacement et la facilité de séjour.';

        $detectedScenes = $this->extractDetectedServices($photoDiagnostics);
        $locationStrategy = $this->inferLocationStrategy($location);
        $locationText = $this->buildLocationMarketingText($locationStrategy, $location);
        $priceFormatted = $price !== '' ? $price . '€/nuit' : '';
        
        $headline = $nameText . ' est un ' . $typeText . ' d\'exception';
        if ($priceFormatted !== '') {
            $headline .= ' à ' . $priceFormatted;
        }
        
        $locBenefit = match ($locationStrategy) {
            'strategic_city' => ' - explorez sans stress.',
            'beach' => ' - détente balnéaire.',
            'mountain' => ' - refuge montagnard.',
            'urban' => ' - au coeur dynamique.',
            'countryside' => ' - tranquillité rurale.',
            default => ' - séjour inoubliable.',
        };
        
        $result = $headline . $locBenefit;
        if ($locationText !== '') {
            $result .= ' ' . $locationText;
        }
        
        if (count($detectedScenes) > 0) {
            $services = implode(', ', array_slice($detectedScenes, 0, 4));
            $result .= ' Services: ' . $services . '.';
        }
        
        return $result;
    }

    /**
     * Tunable score weights for the local AI fallback.
     * Adjust here when you want the score to react more aggressively to new photos or missing content.
     *
     * @return array<string, int|float>
     */
    private function getScoreProfile(): array
    {
        return [
            'photoAverageWeight' => 0.42,
            'bestPhotoWeight' => 0.18,
            'worstPhotoWeight' => 0.08,
            'photoCountStep' => 4,
            'photoCountCap' => 16,
            'descriptionLongBonus' => 7,
            'descriptionMediumBonus' => 4,
            'shortDescriptionPenalty' => 4,
            'nameBonus' => 4,
            'locationBonus' => 4,
            'priceBonus' => 2,
            'missingPhotoPenalty' => 5,
            'emptyGalleryPenalty' => 10,
            'spreadPenalty' => 4,
            'strongGalleryBonus' => 6,
            'shortGalleryPenalty' => 6,
            'contentDiversityBonus' => 8,
        ];
    }

    /**
     * @param array<int, array<string, mixed>> $photoDiagnostics
     */
    private function computeContentDiversityBonus(array $photoDiagnostics, int $cap): int
    {
        if ($photoDiagnostics === []) {
            return 0;
        }

        $keywords = [];
        foreach ($photoDiagnostics as $diagnostic) {
            $scene = (string) ($diagnostic['scene'] ?? 'generic');
            if ($scene !== '') {
                $keywords[$scene] = true;
            }
        }

        $distinct = count($keywords);

        if ($distinct >= 5) {
            return $cap;
        }

        return min($cap, $distinct * 2);
    }

    /**
     * @param array<int, array{label: string, kind: string, path?: string, file?: UploadedFile}> $photoSources
     * @return array<int, array<string, mixed>>
     */
    private function buildPhotoDiagnostics(array $photoSources): array
    {
        $diagnostics = [];
        $typeHints = [];

        foreach ($photoSources as $index => $photoSource) {
            $label = (string) ($photoSource['label'] ?? ('Photo ' . ($index + 1)));
            $path = (string) ($photoSource['path'] ?? '');
            $scene = $this->classifyPhotoScene($label, $path);
            $filePath = $this->resolvePhotoPath($photoSource);

            $width = 0;
            $height = 0;
            $brightness = null;
            $contrast = null;

            if ($filePath !== null && is_file($filePath)) {
                $size = @getimagesize($filePath);
                if (is_array($size)) {
                    $width = (int) ($size[0] ?? 0);
                    $height = (int) ($size[1] ?? 0);
                }

                [$brightness, $contrast] = $this->estimateImageMetrics($filePath);
            }

            $aspect = $height > 0 ? $width / $height : 0.0;
            $score = 45;
            $strength = $this->buildSceneStrength($scene);
            $weaknesses = [];

            $typeHints[] = $scene;

            if ($width >= 1400) {
                $score += 18;
            } elseif ($width >= 1000) {
                $score += 10;
            } elseif ($width > 0) {
                $score -= 12;
                $weaknesses[] = 'résolution faible';
            }

            if ($aspect >= 1.2 && $aspect <= 1.9) {
                $score += 12;
                if ($scene === 'exterior' || $scene === 'pool' || $scene === 'living_room' || $scene === 'restaurant') {
                    $strength = 'Format large très adapté à la couverture pour cette scène.';
                }
            } elseif ($aspect > 0 && $aspect < 0.9) {
                $score -= 8;
                $weaknesses[] = 'cadre vertical moins efficace pour la couverture';
            }

            if ($scene === 'restaurant') {
                $score += 9;
                $strength = 'Photo très utile pour vendre le service, le petit déjeuner ou l’ambiance du séjour.';
            } elseif ($scene === 'food') {
                $score += 7;
                $strength = 'Bonne photo d’ambiance, elle aide à vendre l’expérience client.';
            } elseif ($scene === 'lobby') {
                $score += 6;
                $strength = 'La réception ou le lobby donne une bonne première impression.';
            } elseif ($scene === 'gym') {
                $score += 6;
                $strength = 'Le gym valorise les services et la qualité de l’établissement.';
            } elseif ($scene === 'spa') {
                $score += 8;
                $strength = 'Le spa est un vrai levier d’attractivité et de valeur perçue.';
            } elseif ($scene === 'parking') {
                $score += 4;
                $strength = 'Le parking rassure sur l’accès et la praticité du séjour.';
            } elseif ($scene === 'bar') {
                $score += 5;
                $strength = 'Le bar ajoute une dimension conviviale et plus premium.';
            }

            if ($scene === 'bedroom') {
                $score += 8;
                $strength = 'Photo rassurante pour voir le confort de couchage.';
            }

            if ($scene === 'bathroom') {
                $score += 6;
                $strength = 'Très utile pour rassurer sur la propreté et les équipements.';
            }

            if ($scene === 'kitchen') {
                $score += 6;
                $strength = 'Bonne photo pour montrer les équipements et l’autonomie du logement.';
            }

            if ($scene === 'living_room') {
                $score += 5;
                $strength = 'Photo utile pour montrer l’espace de vie et le confort général.';
            }

            if ($scene === 'exterior') {
                $score += 7;
                $strength = 'Très bonne photo pour la première impression et la confiance.';
            }

            if ($scene === 'pool' || $scene === 'sea_view') {
                $score += 10;
                $strength = 'Photo très vendeuse, bon levier d’attractivité immédiate.';
            }

            if ($brightness !== null) {
                if ($brightness >= 95 && $brightness <= 190) {
                    $score += 10;
                } elseif ($brightness < 85) {
                    $score -= 10;
                    $weaknesses[] = 'image sombre';
                } else {
                    $score -= 4;
                    $weaknesses[] = 'zones surexposées';
                }
            }

            if ($contrast !== null) {
                if ($contrast >= 28 && $contrast <= 90) {
                    $score += 8;
                } elseif ($contrast < 24) {
                    $score -= 8;
                    $weaknesses[] = 'manque de contraste';
                }
            }

            $score = max(0, min(100, $score));
            $weakness = $weaknesses !== []
                ? 'A améliorer: ' . implode(', ', array_unique($weaknesses)) . '.'
                : 'Aucun point bloquant détecté.';

            $action = $weaknesses !== []
                ? 'Reprendre en lumière naturelle, avec un cadre plus large et stable.'
                : 'Conserver cette photo dans le top de la galerie.';

            $diagnostics[] = [
                'label' => $label,
                'scene' => $scene,
                'score' => $score,
                'width' => $width,
                'height' => $height,
                'brightness' => $brightness,
                'contrast' => $contrast,
                'strength' => $strength,
                'weakness' => $weakness,
                'action' => $action,
            ];
        }

        return $diagnostics;
    }

    /**
     * @param array<string, mixed> $diagnostic
     */
    private function buildPhotoRemark(array $diagnostic, string $type, string $location, int $index, int $photoCount): string
    {
        $label = (string) ($diagnostic['label'] ?? ('Photo ' . ($index + 1)));
        $score = (int) ($diagnostic['score'] ?? 0);
        $strength = (string) ($diagnostic['strength'] ?? '');
        $weakness = (string) ($diagnostic['weakness'] ?? '');
        $action = (string) ($diagnostic['action'] ?? '');
        $scene = (string) ($diagnostic['scene'] ?? 'generic');

        $typeText = $type !== '' ? mb_strtolower($type) : 'hébergement';
        $locationText = $location !== '' ? $location : 'l’emplacement';

        $tone = match ($scene) {
            'bedroom' => 'chambre claire et rassurante',
            'bathroom' => 'salle de bain propre et utile',
            'kitchen' => 'cuisine pratique et rassurante',
            'living_room' => 'espace de vie accueillant',
            'restaurant' => 'photo de restaurant qui vend le service et le petit déjeuner',
            'food' => 'photo d’ambiance gourmande',
            'pool' => 'image très attractive pour les réservations',
            'sea_view' => 'vue très vendeuse',
            'exterior' => 'bonne photo d’accueil et de confiance',
            'lobby' => 'hall ou réception qui donne une bonne première impression',
            'reception' => 'réception qui rassure sur l’accueil',
            'spa' => 'espace détente très valorisant',
            'gym' => 'service sportif qui ajoute de la valeur',
            'parking' => 'parking pratique qui rassure sur l’accès',
            'bar' => 'bar ou espace convivial qui augmente l’attrait',
            'meeting_room' => 'salle de réunion ou espace business utile',
            'concierge' => 'service d’accueil ou de conciergerie rassurant',
            'breakfast' => 'petit déjeuner ou buffet qui met en valeur l’expérience',
            'room_service' => 'service en chambre qui améliore le standing',
            'corridor' => 'couloir ou circulation qui montre la structure du lieu',
            default => 'photo utile pour la galerie',
        };

        if ($score >= 78) {
            return sprintf('%s: très bonne %s. %s', $label, $tone, $strength !== '' ? $strength : 'Elle peut servir de photo de couverture.');
        }

        if ($score >= 62) {
            return sprintf('%s: bonne %s, solide pour la galerie et parfois pour la couverture selon le reste de l’annonce. %s', $label, $tone, $strength !== '' ? $strength : 'Elle complète bien l’annonce.');
        }

        if ($score >= 45) {
            $lowRemark = $this->buildSceneLowScoreRemark($scene, $typeText, $locationText, $label);
            return sprintf('%s %s %s', $lowRemark, $weakness !== '' ? $weakness : 'Elle manque de force commerciale.', $action !== '' ? $action : 'Essaie un meilleur cadrage et plus de lumière naturelle.');
        }

        $criticalRemark = $this->buildSceneCriticalRemark($scene, $typeText, $locationText, $label);

        return sprintf('%s %s %s', $criticalRemark, $weakness !== '' ? $weakness : 'Elle est trop faible pour convaincre.', $action !== '' ? $action : sprintf('Refais la photo pour mieux vendre ce %s.', $typeText));
    }

    /**
     * @param array<int, array<string, mixed>> $photoDiagnostics
     */
    private function buildRecommendationsSummary(array $photoDiagnostics, int $photoCount, string $type): string
    {
        if ($photoCount === 0) {
            return 'Aucune photo détectée: ajoute une photo principale nette et plusieurs vues utiles pour lancer l’annonce.';
        }

        $bestScore = $photoDiagnostics[0]['score'] ?? 0;
        $worstScore = $photoDiagnostics !== [] ? end($photoDiagnostics)['score'] : 0;
        $typeText = $type !== '' ? mb_strtolower($type) : 'hébergement';

        if ($bestScore >= 80 && (int) $worstScore >= 62) {
            return sprintf('Très bonne base visuelle pour ce %s: la couverture peut convaincre rapidement, il reste surtout à garder la cohérence des angles.', $typeText);
        }

        if ($photoCount >= 4) {
            return sprintf('La base est solide pour ce %s, mais certaines photos doivent être plus lumineuses ou plus vendeuses pour maximiser les réservations.', $typeText);
        }

        return sprintf('La galerie est encore courte pour ce %s: ajoute des vues complémentaires et choisis une couverture plus impactante.', $typeText);
    }

    /**
     * Generate recommendations ONLY based on what is ACTUALLY DETECTED in photos.
     * @param array<int, array<string, mixed>> $photoDiagnostics
     * @param array<int, string> $detectedServices
     * @param array<int, string> $missingPhotos
     * @return array<int, string>
     */
    private function buildSpecificRecommendations(array $photoDiagnostics, array $detectedServices, array $missingPhotos, string $type, string $location): array
    {
        $recommendations = [];
        
        // Build map of scenes with their quality scores
        $scenesByQuality = [];
        foreach ($photoDiagnostics as $diagnostic) {
            $scene = (string) ($diagnostic['scene'] ?? '');
            if ($scene !== '' && $scene !== 'generic') {
                $score = (int) ($diagnostic['score'] ?? 0);
                if (!isset($scenesByQuality[$scene]) || $score > $scenesByQuality[$scene]['score']) {
                    $scenesByQuality[$scene] = [
                        'score' => $score,
                        'label' => (string) ($diagnostic['label'] ?? ''),
                        'strength' => (string) ($diagnostic['strength'] ?? ''),
                    ];
                }
            }
        }
        
        // REINFORCEMENT: What you have and it's GOOD
        if (isset($scenesByQuality['pool']) && $scenesByQuality['pool']['score'] >= 70) {
            $recommendations[] = sprintf('La piscine (%d/100) est magnifique - c\'est ton plus gros atout, garde-la bien visible. Ajoute une vue panoramique ou une plongée aérienne si possible.', $scenesByQuality['pool']['score']);
        }
        
        if (isset($scenesByQuality['spa']) && $scenesByQuality['spa']['score'] >= 70) {
            $recommendations[] = sprintf('Le spa (%d/100) est très vendu - montre les bassins, saunas et installations de détente en détail.', $scenesByQuality['spa']['score']);
        }
        
        if (isset($scenesByQuality['restaurant']) && $scenesByQuality['restaurant']['score'] >= 70) {
            $recommendations[] = sprintf('Le restaurant (%d/100) est un vrai vendeur - complète avec des photos des plats, du service ou de la salle à manger.', $scenesByQuality['restaurant']['score']);
        }
        
        if (isset($scenesByQuality['gym']) && $scenesByQuality['gym']['score'] >= 70) {
            $recommendations[] = sprintf('La salle de fitness (%d/100) attire les clients actifs - montre les équipements et l\'espace disponible.', $scenesByQuality['gym']['score']);
        }
        
        if (isset($scenesByQuality['exterior']) && $scenesByQuality['exterior']['score'] >= 75) {
            $recommendations[] = sprintf('L\'extérieur (%d/100) crée une excellente première impression - c\'est parfait en couverture.', $scenesByQuality['exterior']['score']);
        }
        
        // FIXING: What you have but QUALITY IS POOR
        if (isset($scenesByQuality['pool']) && $scenesByQuality['pool']['score'] < 65) {
            $recommendations[] = sprintf('La piscine est présente mais la photo est faible (%d/100) - reprends-la en lumière naturelle et meilleur angle.', $scenesByQuality['pool']['score']);
        }
        
        if (isset($scenesByQuality['bedroom']) && $scenesByQuality['bedroom']['score'] < 65) {
            $recommendations[] = sprintf('Photo de chambre insuffisante (%d/100) - retake en montrant le lit clairement, avec bon éclairage.', $scenesByQuality['bedroom']['score']);
        }
        
        if (isset($scenesByQuality['bathroom']) && $scenesByQuality['bathroom']['score'] < 65) {
            $recommendations[] = sprintf('Salle de bain trop sombre (%d/100) - reprends avec meilleure lumière pour montrer propreté et équipements.', $scenesByQuality['bathroom']['score']);
        }
        
        // CRITICAL GAPS: What's MISSING and crucial
        if (!isset($scenesByQuality['bedroom']) && !isset($scenesByQuality['living_room'])) {
            $recommendations[] = '⚠️ CRITIQUE: Aucune photo de chambre/espace de couchage - c\'est LE plus important pour rassurer les clients.';
        }
        
        if (!isset($scenesByQuality['bathroom'])) {
            $recommendations[] = '⚠️ Salle de bain invisible - ajoute UNE SEULE photo nette, ça rassure énormément sur l\'hygiène.';
        }
        
        if (!isset($scenesByQuality['exterior']) && isset($scenesByQuality['interior'])) {
            $recommendations[] = 'Pas de vue extérieure détectée - l\'accès/façade crée la confiance AVANT l\'arrivée.';
        }
        
        return array_slice($recommendations, 0, 5);
    }


    /**
     * @param array<int, array<string, mixed>> $photoDiagnostics
     * @param array<int, string> $missingPhotos
     */
    private function buildSummaryText(int $score, int $photoCount, array $photoDiagnostics, string $type, string $location, array $missingPhotos): string
    {
        $typeText = $type !== '' ? mb_strtolower($type) : 'hébergement';
        $locationText = $location !== '' ? $location : 'cet emplacement';
        $bestScore = $photoDiagnostics[0]['score'] ?? 0;
        $hasGaps = count($missingPhotos) > 0;
        $dominantScene = $this->inferDominantSceneFromDiagnostics($photoDiagnostics);

        if ($score >= 82 && !$hasGaps) {
            return sprintf('Annonce très forte pour un %s à %s: les photos sont attractives, cohérentes et rassurantes.', $typeText, $locationText);
        }

        if ($bestScore >= 70 && $photoCount >= 4) {
            return sprintf('Bonne base visuelle pour ce %s à %s, avec une couverture convaincante et quelques optimisations possibles. %s', $typeText, $locationText, $this->buildSceneSummaryCue($dominantScene, $typeText));
        }

        if ($photoCount < 3) {
            return sprintf('La galerie de ce %s à %s est encore trop légère: ajoute des angles manquants pour convaincre plus vite.', $typeText, $locationText);
        }

        return sprintf('L’annonce de ce %s à %s peut mieux vendre ses atouts: certaines photos doivent être retravaillées et la description doit renforcer les bénéfices.', $typeText, $locationText);
    }

    /**
     * @param array<int, array<string, mixed>> $photoDiagnostics
     */
    private function inferDominantSceneFromDiagnostics(array $photoDiagnostics): string
    {
        if ($photoDiagnostics === []) {
            return '';
        }

        $sceneScores = [];
        foreach ($photoDiagnostics as $diagnostic) {
            $scene = (string) ($diagnostic['scene'] ?? 'generic');
            $sceneScores[$scene] = ($sceneScores[$scene] ?? 0) + (int) ($diagnostic['score'] ?? 0);
        }

        arsort($sceneScores);

        return (string) array_key_first($sceneScores);
    }

    /**
     * @param array<int, array<string, mixed>> $bestPhotos
     */
    private function inferDominantSceneFromPhotos(array $bestPhotos): string
    {
        if ($bestPhotos === []) {
            return '';
        }

        $firstLabel = mb_strtolower((string) ($bestPhotos[0]['label'] ?? ''));

        return $this->classifyPhotoScene($firstLabel, $firstLabel);
    }

    private function buildSceneSummaryCue(string $scene, string $typeText): string
    {
        return match ($scene) {
            'bedroom' => sprintf('La chambre principale semble être un point fort pour ce %s.', $typeText),
            'bathroom' => sprintf('La salle de bain renforce ici la confiance dans ce %s.', $typeText),
            'restaurant' => 'La photo du restaurant ou du service ajoute une vraie valeur perçue.',
            'pool' => 'La piscine ou l’extérieur donne un fort pouvoir d’attraction.',
            'kitchen' => sprintf('La cuisine ou le coin repas aide à rassurer sur l’autonomie du %s.', $typeText),
            'living_room' => 'L’espace de vie donne une bonne lecture du confort général.',
            'exterior' => 'L’extérieur donne une première impression solide et crédible.',
            default => '',
        };
    }

    private function buildSceneDescriptionCue(string $scene, string $typeText, string $locationText): string
    {
        return match ($scene) {
            'bedroom' => sprintf('La chambre mise en avant aide à projeter un séjour reposant à %s.', $locationText),
            'bathroom' => 'La salle de bain visible renforce la perception de propreté et de confort.',
            'restaurant' => 'Le restaurant ou le petit déjeuner donne une dimension service très attractive.',
            'food' => 'Les photos de repas ajoutent une touche d’expérience et de convivialité.',
            'pool' => 'La piscine ou la vue extérieure améliore fortement l’envie de réserver.',
            'kitchen' => sprintf('La cuisine rassure sur l’autonomie et l’usage pratique de ce %s.', $typeText),
            'living_room' => sprintf('Le salon ou la pièce de vie montre un %s accueillant à %s.', $typeText, $locationText),
            'exterior' => sprintf('L’extérieur donne un bon aperçu du cadre de ce %s à %s.', $typeText, $locationText),
            default => '',
        };
    }

    private function buildSceneStrength(string $scene): string
    {
        return match ($scene) {
            'bedroom' => 'Photo rassurante pour un client qui veut voir le confort de couchage.',
            'bathroom' => 'Utile pour rassurer sur la propreté et les équipements.',
            'kitchen' => 'Bonne photo pour montrer les équipements et l’autonomie du logement.',
            'living_room' => 'Photo utile pour montrer l’espace de vie et le confort général.',
            'restaurant' => 'Photo très utile pour vendre le service, le restaurant ou le petit déjeuner.',
            'food' => 'Bonne photo d’ambiance, elle rassure sur l’expérience client.',
            'pool' => 'Photo très vendeuse, bon levier d’attractivité immédiate.',
            'sea_view' => 'Photo très vendeuse grâce à la vue et au cadre.',
            'exterior' => 'Très bonne photo pour la première impression et la confiance.',
            'lobby' => 'Le lobby ou la réception aide à construire une image pro et accueillante.',
            'reception' => 'La réception donne une première impression sérieuse et rassurante.',
            'spa' => 'Le spa augmente fortement la valeur perçue de l’établissement.',
            'gym' => 'Le gym montre un service utile et moderne.',
            'parking' => 'Le parking rassure sur la praticité du séjour.',
            'bar' => 'Le bar renforce l’idée d’un établissement vivant et agréable.',
            'meeting_room' => 'La salle de réunion montre un vrai positionnement business.',
            'concierge' => 'Le service de conciergerie renforce la qualité perçue.',
            'breakfast' => 'Le buffet ou le petit déjeuner améliore fortement la valeur perçue.',
            'room_service' => 'Le room service ajoute un vrai signal de confort.',
            'corridor' => 'Le couloir aide à comprendre la structure et l’organisation du lieu.',
            default => 'Photo utile pour compléter la galerie.',
        };
    }

    private function buildSceneLowScoreRemark(string $scene, string $typeText, string $locationText, string $label): string
    {
        return match ($scene) {
            'bedroom' => sprintf('%s: la chambre n’est pas encore assez convaincante pour vendre le repos à %s.', $label, $locationText),
            'bathroom' => sprintf('%s: la salle de bain doit mieux montrer la propreté et l’état réel.', $label),
            'kitchen' => sprintf('%s: la cuisine est trop faible pour rassurer sur l’équipement.', $label),
            'living_room' => sprintf('%s: le salon ne montre pas encore assez l’espace et le confort.', $label),
            'restaurant' => sprintf('%s: le restaurant ou le petit déjeuner ne ressort pas assez pour donner envie.', $label),
            'food' => sprintf('%s: le repas manque de force visuelle pour vendre l’expérience.', $label),
            'pool' => sprintf('%s: la piscine ne profite pas encore pleinement à l’attractivité du %s.', $label, $typeText),
            'sea_view' => sprintf('%s: la vue devrait être plus impactante pour vendre le cadre.', $label),
            'exterior' => sprintf('%s: l’extérieur est utile mais pas encore assez fort pour donner une bonne première impression.', $label),
            'lobby' => sprintf('%s: la réception ou le lobby doit mieux montrer l’accueil et la qualité de service.', $label),
            'reception' => sprintf('%s: la réception doit être plus lisible pour rassurer le client.', $label),
            'spa' => sprintf('%s: le spa devrait être plus immersif pour donner envie.', $label),
            'gym' => sprintf('%s: le gym est trop discret pour valoriser ce service.', $label),
            'parking' => sprintf('%s: le parking n’est pas assez clair pour rassurer sur l’accès.', $label),
            'bar' => sprintf('%s: le bar doit mieux ressortir pour donner une vraie ambiance.', $label),
            'meeting_room' => sprintf('%s: la salle de réunion n’est pas assez lisible pour un usage business.', $label),
            'concierge' => sprintf('%s: le service d’accueil doit être plus clair pour inspirer confiance.', $label),
            'breakfast' => sprintf('%s: le petit déjeuner ou buffet doit être plus appétissant et lisible.', $label),
            'room_service' => sprintf('%s: le room service doit mieux ressortir pour être crédible.', $label),
            'corridor' => sprintf('%s: le couloir ou la circulation doit être mieux cadré pour être utile.', $label),
            default => sprintf('%s: cette photo reste trop neutre pour aider à vendre le %s.', $label, $typeText),
        };
    }

    private function buildSceneCriticalRemark(string $scene, string $typeText, string $locationText, string $label): string
    {
        return match ($scene) {
            'bedroom' => sprintf('%s: la chambre est trop faible, il faut une photo plus claire et plus large.', $label),
            'bathroom' => sprintf('%s: la salle de bain doit être reprise pour inspirer confiance.', $label),
            'kitchen' => sprintf('%s: la cuisine doit être mieux cadrée pour montrer les équipements.', $label),
            'living_room' => sprintf('%s: le salon doit être retravaillé pour mieux montrer l’espace de vie.', $label),
            'restaurant' => sprintf('%s: le restaurant ou le petit déjeuner ne suffit pas encore pour séduire.', $label),
            'food' => sprintf('%s: le plat ou le repas doit être repris en meilleure lumière.', $label),
            'pool' => sprintf('%s: la piscine ne ressort pas assez comme atout principal.', $label),
            'sea_view' => sprintf('%s: la vue n’est pas encore assez forte pour convaincre.', $label),
            'exterior' => sprintf('%s: l’extérieur doit être repris pour une meilleure première impression.', $label),
            'lobby' => sprintf('%s: la réception doit être reprise pour mieux transmettre l’accueil.', $label),
            'reception' => sprintf('%s: la réception est trop faible pour inspirer confiance.', $label),
            'spa' => sprintf('%s: le spa doit être mieux valorisé pour faire envie.', $label),
            'gym' => sprintf('%s: le gym doit être plus visible et mieux cadré.', $label),
            'parking' => sprintf('%s: le parking doit être plus clair pour être utile.', $label),
            'bar' => sprintf('%s: le bar ne ressort pas encore assez comme atout.', $label),
            default => sprintf('%s: photo à reprendre en priorité pour rendre ce %s plus vendeur à %s.', $label, $typeText, $locationText),
        };
    }

    private function classifyPhotoScene(string $label, string $path): string
    {
        $haystack = mb_strtolower(trim($label . ' ' . $path));

        $rules = [
            'bathroom' => ['salle de bain', 'bathroom', 'bath', 'toilet', 'wc', 'shower', 'douche'],
            'bedroom' => ['chambre', 'bedroom', 'room', 'lit', 'bed'],
            'kitchen' => ['cuisine', 'kitchen', 'coin repas', 'table', 'frigo', 'stove'],
            'restaurant' => ['restaurant', 'resto', 'dining', 'buffet', 'menu', 'breakfast', 'petit dej', 'petit-déj', 'petit déjeuner', 'petit-dejeuner'],
            'food' => ['plat', 'repas', 'meal', 'food', 'dish', 'cuisine du chef'],
            'pool' => ['piscine', 'pool', 'spa', 'jacuzzi'],
            'sea_view' => ['mer', 'sea', 'beach', 'plage', 'vue', 'view', 'ocean'],
            'exterior' => ['extérieur', 'exterieur', 'facade', 'façade', 'terrasse', 'balcon', 'outside', 'garden', 'jardin'],
            'living_room' => ['salon', 'living', 'séjour', 'sejour', 'lounge', 'hall', 'living room'],
            'lobby' => ['lobby', 'hall d’accueil', 'hall accueil', 'hall', 'entrée', 'entree'],
            'reception' => ['réception', 'reception', 'front desk', 'desk', 'accueil'],
            'spa' => ['spa', 'wellness', 'well being', 'massage', 'hammam', 'sauna'],
            'gym' => ['gym', 'fitness', 'salle de sport', 'sport'],
            'parking' => ['parking', 'car park', 'garage', 'stationnement'],
            'bar' => ['bar', 'cocktail', 'lounge bar', 'pub'],
            'meeting_room' => ['meeting', 'conference', 'salle de réunion', 'salle reunion', 'boardroom', 'seminaire', 'séminaire'],
            'concierge' => ['concierge', 'host', 'assistant', 'guest service', 'service client'],
            'breakfast' => ['petit déjeuner', 'petit-dejeuner', 'breakfast area', 'breakfast buffet', 'buffet breakfast'],
            'room_service' => ['room service', 'service en chambre', 'tray', 'plateau repas'],
            'corridor' => ['corridor', 'hallway', 'couloir', 'corridor'],
        ];

        foreach ($rules as $scene => $needles) {
            if ($this->containsAny($haystack, $needles)) {
                return $scene;
            }
        }

        return 'generic';
    }

    /**
     * @param array{label: string, kind: string, path?: string, file?: UploadedFile} $photoSource
     */
    private function resolvePhotoPath(array $photoSource): ?string
    {
        if (($photoSource['kind'] ?? '') === 'upload' && ($photoSource['file'] ?? null) instanceof UploadedFile) {
            return $photoSource['file']->getPathname();
        }

        if (($photoSource['kind'] ?? '') === 'stored' && is_string($photoSource['path'] ?? null)) {
            $path = $this->resolveStoredPath((string) $photoSource['path']);
            return is_file($path) ? $path : null;
        }

        return null;
    }

    /**
     * @return array{0: float|null, 1: float|null}
     */
    private function estimateImageMetrics(string $filePath): array
    {
        if (!function_exists('imagecreatefromjpeg')) {
            return [null, null];
        }

        $mime = mime_content_type($filePath) ?: '';
        $image = null;

        if ($mime === 'image/jpeg' && function_exists('imagecreatefromjpeg')) {
            $image = @imagecreatefromjpeg($filePath);
        } elseif ($mime === 'image/png' && function_exists('imagecreatefrompng')) {
            $image = @imagecreatefrompng($filePath);
        } elseif ($mime === 'image/gif' && function_exists('imagecreatefromgif')) {
            $image = @imagecreatefromgif($filePath);
        } elseif ($mime === 'image/webp' && function_exists('imagecreatefromwebp')) {
            $image = @imagecreatefromwebp($filePath);
        }

        if (!$image) {
            return [null, null];
        }

        $width = imagesx($image);
        $height = imagesy($image);

        if ($width <= 0 || $height <= 0) {
            imagedestroy($image);
            return [null, null];
        }

        $stepX = max(1, (int) floor($width / 40));
        $stepY = max(1, (int) floor($height / 40));

        $values = [];
        for ($x = 0; $x < $width; $x += $stepX) {
            for ($y = 0; $y < $height; $y += $stepY) {
                $rgb = imagecolorat($image, $x, $y);
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;
                $values[] = (0.299 * $r) + (0.587 * $g) + (0.114 * $b);
            }
        }

        imagedestroy($image);

        if ($values === []) {
            return [null, null];
        }

        $count = count($values);
        $mean = array_sum($values) / $count;

        $variance = 0.0;
        foreach ($values as $value) {
            $variance += ($value - $mean) ** 2;
        }

        $stdDev = sqrt($variance / $count);

        return [round($mean, 2), round($stdDev, 2)];
    }

    /**
     * @param array<int, array{label: string, kind: string, path?: string, file?: UploadedFile}> $photoSources
     * @return array<int, string>
     */
    private function inferMissingPhotoAngles(array $photoSources): array
    {
        $scenes = [];
        foreach ($photoSources as $source) {
            $scenes[$this->classifyPhotoScene((string) ($source['label'] ?? ''), (string) ($source['path'] ?? ''))] = true;
        }

        $missing = [];

        if (!isset($scenes['bedroom'])) {
            $missing[] = 'Ajouter une photo claire de la chambre principale.';
        }
        if (!isset($scenes['bathroom'])) {
            $missing[] = 'Ajouter une photo de la salle de bain propre et bien éclairée.';
        }
        if (!isset($scenes['living_room'])) {
            $missing[] = 'Ajouter une photo large du salon ou de la pièce de vie.';
        }
        if (!isset($scenes['kitchen'])) {
            $missing[] = 'Ajouter une photo de la cuisine ou du coin repas.';
        }
        if (!isset($scenes['exterior']) && !isset($scenes['sea_view'])) {
            $missing[] = 'Ajouter une photo extérieure (façade, terrasse, balcon ou vue).';
        }

        if (!isset($scenes['restaurant']) && !isset($scenes['food'])) {
            $missing[] = 'Ajouter une photo d’un repas, du petit déjeuner ou du service si tu veux mieux vendre l’expérience.';
        }

        if (!isset($scenes['meeting_room']) && !isset($scenes['concierge'])) {
            $missing[] = 'Ajouter une photo de la salle de réunion ou du service d’accueil si l’hôtel en propose.';
        }

        if (!isset($scenes['lobby']) && !isset($scenes['reception'])) {
            $missing[] = 'Ajouter une photo de la réception ou du lobby pour rassurer sur l’accueil.';
        }

        if (!isset($scenes['spa']) && !isset($scenes['gym']) && !isset($scenes['bar'])) {
            $missing[] = 'Ajouter une photo d’un service de l’hôtel comme le spa, le gym ou le bar si ces équipements existent.';
        }

        return $missing;
    }

    private function getSceneLabel(string $scene): string
    {
        return match ($scene) {
            'bedroom' => 'chambre',
            'bathroom' => 'salle de bain',
            'kitchen' => 'cuisine',
            'living_room' => 'salon',
            'restaurant' => 'restaurant ou petit déjeuner',
            'food' => 'repas',
            'pool' => 'piscine',
            'sea_view' => 'vue ou mer',
            'exterior' => 'extérieur',
            'lobby' => 'lobby',
            'reception' => 'réception',
            'spa' => 'spa ou bien-être',
            'gym' => 'gym ou fitness',
            'parking' => 'parking',
            'bar' => 'bar',
            'meeting_room' => 'salle de réunion',
            'concierge' => 'concierge ou accueil',
            'breakfast' => 'petit déjeuner',
            'room_service' => 'room service',
            'corridor' => 'couloir',
            default => 'photo générique',
        };
    }

    /**
     * @param array<int, string> $needles
     */
    private function containsAny(string $haystack, array $needles): bool
    {
        foreach ($needles as $needle) {
            if ($needle !== '' && str_contains($haystack, $needle)) {
                return true;
            }
        }

        return false;
    }

    private function cleanValue(mixed $value): string
    {
        if ($value === null) {
            return '';
        }

        return trim((string) $value);
    }

    /**
     * Extract human-readable service names from photo diagnostics.
     * @param array<int, array<string, mixed>> $photoDiagnostics
     * @return array<int, string>
     */
    private function extractDetectedServices(array $photoDiagnostics): array
    {
        $services = [];
        $sceneMap = [];
        
        foreach ($photoDiagnostics as $diagnostic) {
            $scene = (string) ($diagnostic['scene'] ?? 'generic');
            if ($scene !== '' && $scene !== 'generic') {
                $sceneMap[$scene] = true;
            }
        }
        
        // Map scenes to friendly service names
        $serviceNames = [
            'restaurant' => 'restaurant sur place',
            'food' => 'services de repas',
            'breakfast' => 'petit-déjeuner inclus',
            'pool' => 'piscine',
            'spa' => 'spa et bien-être',
            'gym' => 'salle de fitness',
            'bar' => 'bar lounge',
            'parking' => 'parking privé',
            'reception' => 'réception 24h',
            'lobby' => 'hall de réception',
            'meeting_room' => 'salles de réunion',
            'room_service' => 'room service',
            'sea_view' => 'vue sur mer',
        ];
        
        foreach (array_keys($sceneMap) as $scene) {
            if (isset($serviceNames[$scene])) {
                $services[] = $serviceNames[$scene];
            }
        }
        
        return array_slice(array_unique($services), 0, 5);
    }
    
    /**
     * Infer location strategy (strategic, beach, mountain, city, rural, etc.).
     */
    private function inferLocationStrategy(string $location): string
    {
        $locationLower = mb_strtolower($location);
        
        // Strategic city analysis
        if (preg_match('/(paris|london|amsterdam|barcelona|rome|lyon|marseille|bordeaux|cannes|nice|monaco)/i', $location)) {
            return 'strategic_city';
        }
        
        // Beach/coast analysis
        if (preg_match('/(côte|coast|beach|plage|mer|sea|ocean|maldives|bora|island|île|méditerranée)/i', $location)) {
            return 'beach';
        }
        
        // Mountain analysis
        if (preg_match('/(montagne|alpes|pyrénées|mountain|ski|lodge|chalet|lac)/i', $location)) {
            return 'mountain';
        }
        
        // Urban analysis
        if (preg_match('/(centre-ville|downtown|urban|city|métropole|capitale)/i', $location)) {
            return 'urban';
        }
        
        // Countryside analysis
        if (preg_match('/(campagne|village|rural|countryside|domain|château)/i', $location)) {
            return 'countryside';
        }
        
        // Default
        return 'generic';
    }
    
    /**
     * Build marketing text based on location strategy.
     */
    private function buildLocationMarketingText(string $strategy, string $location): string
    {
        $locationName = $location !== '' ? $location : 'votre destination';
        
        return match ($strategy) {
            'strategic_city' => sprintf('Idéal pour explorer %s à pied. Proche transports, restaurants, attractions touristiques.', $locationName),
            'beach' => sprintf('Face à %s, un havre de détente et de sérénité. Accès direct plage, vue panoramique.', $locationName),
            'mountain' => sprintf('Refugié dans les montagnes à %s, parfait pour nature et bien-être. Panoramas spectaculaires.', $locationName),
            'urban' => sprintf('Au cœur dynamique de %s, à proximité commerces, loisirs et vie nocturne.', $locationName),
            'countryside' => sprintf('Échappée rurale à %s, calme et authenticité garantis. Idéal pour repos et détente.', $locationName),
            default => sprintf('Situé à %s, accès facile aux commodités et attractions régionales.', $locationName),
        };
    }
    
    /**
     * Build services-focused marketing text.
     * @param array<int, string> $detectedScenes
     */
    private function buildServicesMarketingText(array $detectedScenes): string
    {
        if (count($detectedScenes) === 0) {
            return '';
        }
        
        $primary = $detectedScenes[0] ?? '';
        
        $text = match (true) {
            str_contains($primary, 'restaurant') => 'Gastronomie sur place pour expérience culinaire inoubliable.',
            str_contains($primary, 'spa') => 'Spa luxe pour détente et régénération totale.',
            str_contains($primary, 'pool') => 'Piscine chauffée pour baignade toute l\'année.',
            str_contains($primary, 'gym') => 'Équipements fitness pour garder la forme en vacances.',
            str_contains($primary, 'reception') => 'Accueil premium 24h/24 pour conciergerie full service.',
            default => 'Services complets pour un séjour sans stress.',
        };
        
        return $text;
    }
    
    /**
     * Build the main value proposition headline.
     */
    private function buildValueProposition(string $nameText, string $typeText, string $priceText, string $strategy, string $servicesText): string
    {
        $headline = sprintf('%s est un %s d\'exception', $nameText, $typeText);
        
        if ($priceText !== '') {
            $headline .= sprintf(' à %s', $priceText);
        }
        
        // Add strategic benefit based on type
        $strategicBenefit = match ($strategy) {
            'strategic_city' => ' - votre base idéale pour explorer en toute liberté.',
            'beach' => ' - votre paradis tropical de détente.',
            'mountain' => ' - votre refuge montagnard idyllique.',
            'urban' => ' - au cœur des énergies urbaines.',
            'countryside' => ' - votre oasis de tranquillité rurale.',
            default => ' - pour un séjour mémorable.',
        };
        
        return $headline . $strategicBenefit;
    }
}