<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploaderService
{
    private string $uploadsDirectory;
    private SluggerInterface $slugger;

    public function __construct(string $uploadsDirectory, SluggerInterface $slugger)
    {
        $this->uploadsDirectory = $uploadsDirectory;
        $this->slugger = $slugger;
    }

    public function upload(UploadedFile $file): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        // This is needed to safely include the file name as part of the URL
        $safeFilename = $this->slugger->slug($originalFilename);

        // Obtenir l'extension du fichier original
        $extension = $file->getClientOriginalExtension();

        // Si pas d'extension, essayer avec guessExtension
        if (!$extension) {
            try {
                $extension = $file->guessExtension();
            } catch (\Exception $e) {
                // Fallback: utiliser l'extension du nom de fichier
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                if (!$extension) {
                    $extension = 'bin'; // Défaut
                }
            }
        }

        $newFilename = $safeFilename.'-'.uniqid().'.'.$extension;

        try {
            $file->move($this->uploadsDirectory, $newFilename);
        } catch (\Exception $e) {
            throw new \RuntimeException('Erreur lors du téléchargement du fichier: '.$e->getMessage());
        }

        return $newFilename;
    }

    public function getUploadsDirectory(): string
    {
        return $this->uploadsDirectory;
    }
}

