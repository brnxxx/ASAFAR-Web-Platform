<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Repository\HebergementRepository;
use App\Form\HebergementType;
use App\Service\HebergementAiAssistant;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin')]
class HebergementController extends AbstractController
{
    #[Route('/hebergements', name: 'admin_hebergements')]
    public function index(HebergementRepository $hebergementRepo): Response
    {
        $hebergements = $hebergementRepo->findAllWithCategorie();

        return $this->render('admin/hebergements/index.html.twig', [
            'hebergements' => $hebergements,
        ]);
    }

    #[Route('/hebergements/create', name: 'admin_hebergement_create', methods: ['GET', 'POST'])]
    public function create(
        Request $request,
        EntityManagerInterface $em,
        SluggerInterface $slugger
    ): Response {
        $hebergement = new Hebergement();

        $form = $this->createForm(HebergementType::class, $hebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $aiScoreRaw = (string) $request->request->get('ai_score', '0');
            $aiAnalyzed = (string) $request->request->get('ai_analyzed', '0') === '1';
            $aiScore = is_numeric($aiScoreRaw) ? (float) $aiScoreRaw : 0.0;

            if (!$aiAnalyzed || $aiScore <= 60.0) {
                $this->addFlash('error', 'Creation refusee: le score IA doit etre strictement superieur a 60/100. Lancez l\'analyse IA avant de creer l\'hebergement.');

                return $this->render('admin/hebergements/form.html.twig', [
                    'form' => $form,
                    'hebergement' => $hebergement,
                    'title' => 'Creer un Hebergement',
                ]);
            }

            $this->handleMainImageUpload($form, $hebergement, $slugger);
            $this->handleGalleryUploads($form, $hebergement, $slugger);

            $em->persist($hebergement);
            $em->flush();

            $this->addFlash('success', 'Hebergement cree avec succes!');
            return $this->redirectToRoute('admin_hebergements');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs du formulaire avant de continuer.');
        }

        return $this->render('admin/hebergements/form.html.twig', [
            'form' => $form,
            'hebergement' => $hebergement,
            'title' => 'Creer un Hebergement',
        ]);
    }

    #[Route('/hebergements/{id}/edit', name: 'admin_hebergement_edit', methods: ['GET', 'POST'])]
    public function edit(
        Hebergement $hebergement,
        Request $request,
        EntityManagerInterface $em,
        SluggerInterface $slugger
    ): Response {
        $form = $this->createForm(HebergementType::class, $hebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleMainImageUpload($form, $hebergement, $slugger);
            $this->handleGalleryUploads($form, $hebergement, $slugger, true);

            $em->flush();

            $this->addFlash('success', 'Hebergement modifie avec succes!');
            return $this->redirectToRoute('admin_hebergements');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs du formulaire avant de continuer.');
        }

        return $this->render('admin/hebergements/form.html.twig', [
            'form' => $form,
            'hebergement' => $hebergement,
            'title' => 'Modifier l\'Hebergement',
        ]);
    }

    #[Route('/hebergements/ai/analyze', name: 'admin_hebergement_ai_analyze', methods: ['POST'])]
    public function analyze(Request $request, HebergementAiAssistant $assistant): JsonResponse
    {
        try {
            $hebergement = new Hebergement();
            $payload = $request->request->all('hebergement');

            if (!is_array($payload)) {
                $payload = [];
            }

            $hebergement
                ->setNom($this->extractAiField($request, $payload, 'nom'))
                ->setType($this->extractAiField($request, $payload, 'type') ?: null)
                ->setLocalisation($this->extractAiField($request, $payload, 'localisation'))
                ->setDescription($this->extractAiField($request, $payload, 'description'))
                ->setPrixParNuit($this->extractAiField($request, $payload, 'prixParNuit') !== '' ? $this->extractAiField($request, $payload, 'prixParNuit') : null)
                ->setDisponibilite($this->extractAiField($request, $payload, 'disponibilite') ?: null);

            $existingImagePath = trim((string) $request->request->get('ai_existing_image_path', ''));
            $existingGalleryRaw = (string) $request->request->get('ai_existing_gallery_images', '[]');
            $existingGalleryImages = json_decode($existingGalleryRaw, true);

            if (!is_array($existingGalleryImages)) {
                $existingGalleryImages = [];
            }

            $photoSources = [];

            if ($existingImagePath !== '') {
                $photoSources[] = [
                    'label' => pathinfo($existingImagePath, PATHINFO_FILENAME) ?: 'Photo principale actuelle',
                    'path' => $existingImagePath,
                ];
            }

            foreach ($existingGalleryImages as $index => $path) {
                if (!is_string($path) || trim($path) === '') {
                    continue;
                }

                $photoSources[] = [
                    'label' => pathinfo($path, PATHINFO_FILENAME) ?: sprintf('Galerie %d', $index + 1),
                    'path' => $path,
                ];
            }

            $uploadedFiles = $request->files->get('hebergement');
            if (is_array($uploadedFiles)) {
                if (($uploadedFiles['imagePath'] ?? null) instanceof UploadedFile) {
                    $uploadedMainFile = $uploadedFiles['imagePath'];
                    $photoSources[] = [
                        'label' => pathinfo($uploadedMainFile->getClientOriginalName(), PATHINFO_FILENAME) ?: 'Nouvelle photo principale',
                        'file' => $uploadedMainFile,
                    ];
                }

                $galleryUploads = $uploadedFiles['galleryImages'] ?? [];
                if (is_array($galleryUploads)) {
                    foreach ($galleryUploads as $index => $file) {
                        if (!$file instanceof UploadedFile) {
                            continue;
                        }

                        $photoSources[] = [
                            'label' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) ?: sprintf('Nouvelle galerie %d', $index + 1),
                            'file' => $file,
                        ];
                    }
                }
            }

            return $this->json($assistant->analyze($hebergement, $photoSources));
        } catch (\Throwable $exception) {
            return $this->json([
                'error' => 'Erreur serveur pendant l\'analyse IA.',
                'details' => $exception->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/hebergements/{id}/delete', name: 'admin_hebergement_delete', methods: ['POST'])]
    public function delete(
        Hebergement $hebergement,
        EntityManagerInterface $em,
        Request $request
    ): Response {
        if ($this->isCsrfTokenValid('delete' . $hebergement->getIdHebergement(), $request->request->get('_token'))) {
            $em->remove($hebergement);
            $em->flush();

            $this->addFlash('success', 'Hebergement supprime avec succes!');
        }

        return $this->redirectToRoute('admin_hebergements');
    }

    private function handleMainImageUpload(FormInterface $form, Hebergement $hebergement, SluggerInterface $slugger): void
    {
        /** @var UploadedFile|null $imageFile */
        $imageFile = $form->get('imagePath')->getData();

        if (!$imageFile instanceof UploadedFile) {
            return;
        }

        $storedPath = $this->storeUploadedFile($imageFile, 'hebergements', $slugger);

        if ($storedPath !== null) {
            $hebergement->setImagePath($storedPath);
        }
    }

    private function handleGalleryUploads(FormInterface $form, Hebergement $hebergement, SluggerInterface $slugger, bool $appendToExisting = false): void
    {
        $galleryFiles = $form->get('galleryImages')->getData();

        if (!is_array($galleryFiles)) {
            return;
        }

        $storedImages = [];

        foreach ($galleryFiles as $file) {
            if (!$file instanceof UploadedFile) {
                continue;
            }

            $storedPath = $this->storeUploadedFile($file, 'hebergements/gallery', $slugger);

            if ($storedPath !== null) {
                $storedImages[] = $storedPath;
            }
        }

        if ($storedImages === []) {
            return;
        }

        if ($appendToExisting) {
            $existingImages = $hebergement->getGalleryImages() ?? [];
            $hebergement->setGalleryImages(array_values(array_merge($existingImages, $storedImages)));
            return;
        }

        $hebergement->setGalleryImages($storedImages);
    }

    private function storeUploadedFile(UploadedFile $file, string $relativeDirectory, SluggerInterface $slugger): ?string
    {
        $projectDir = (string) $this->getParameter('kernel.project_dir');
        $targetDirectory = $projectDir . '/public/uploads/' . trim($relativeDirectory, '/');

        if (!is_dir($targetDirectory) && !@mkdir($targetDirectory, 0755, true) && !is_dir($targetDirectory)) {
            $this->addFlash('error', 'Impossible de créer le dossier de stockage des images.');
            return null;
        }

        $baseName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeName = strtolower((string) $slugger->slug($baseName));
        $extension = strtolower((string) ($file->guessExtension() ?: $file->getClientOriginalExtension() ?: 'jpg'));
        $filename = sprintf('%s-%s.%s', $safeName !== '' ? $safeName : 'image', uniqid(), $extension);

        try {
            $file->move($targetDirectory, $filename);
        } catch (\Throwable $exception) {
            $this->addFlash('error', 'Erreur lors de l\'upload de l\'image: ' . $exception->getMessage());
            return null;
        }

        return '/uploads/' . trim($relativeDirectory, '/') . '/' . $filename;
    }

    /**
     * @param array<string, mixed> $payload
     */
    private function extractAiField(Request $request, array $payload, string $key): string
    {
        $value = $payload[$key] ?? null;

        if (is_scalar($value)) {
            return trim((string) $value);
        }

        $fallback = $request->request->get('ai_' . $key, '');

        return is_scalar($fallback) ? trim((string) $fallback) : '';
    }
}
