<?php

namespace App\Controller;

use App\Entity\CategorieHebergement;
use App\Repository\CategorieHebergementRepository;
use App\Form\CategorieHebergementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
class CategorieHebergementController extends AbstractController
{
    #[Route('/categories-hebergement', name: 'admin_categories_hebergement')]
    #[Route('/hebergements/categories', name: 'admin_hebergements_categories')]
    public function index(CategorieHebergementRepository $categorieRepo): Response
    {
        $categories = $categorieRepo->findAll();

        return $this->render('admin/categories_hebergement/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/categories-hebergement/create', name: 'admin_categorie_hebergement_create', methods: ['GET', 'POST'])]
    public function create(
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $categorie = new CategorieHebergement();

        $form = $this->createForm(CategorieHebergementType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleCategoryImageUpload($categorie, $form->get('imageFile')->getData());

            $em->persist($categorie);
            $em->flush();

            $this->addFlash('success', 'Categorie d\'hebergement creee avec succes!');
            return $this->redirectToRoute('admin_categories_hebergement');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs du formulaire avant de continuer.');
        }

        return $this->render('admin/categories_hebergement/form.html.twig', [
            'form' => $form,
            'categorie' => $categorie,
            'title' => 'Creer une Categorie d\'Hebergement',
        ]);
    }

    #[Route('/categories-hebergement/{id}/edit', name: 'admin_categorie_hebergement_edit', methods: ['GET', 'POST'])]
    public function edit(
        CategorieHebergement $categorie,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $form = $this->createForm(CategorieHebergementType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleCategoryImageUpload($categorie, $form->get('imageFile')->getData());

            $em->flush();

            $this->addFlash('success', 'Categorie d\'hebergement modifiee avec succes!');
            return $this->redirectToRoute('admin_categories_hebergement');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs du formulaire avant de continuer.');
        }

        return $this->render('admin/categories_hebergement/form.html.twig', [
            'form' => $form,
            'categorie' => $categorie,
            'title' => 'Modifier la Categorie d\'Hebergement',
        ]);
    }

    #[Route('/categories-hebergement/{id}/delete', name: 'admin_categorie_hebergement_delete', methods: ['POST'])]
    public function delete(
        CategorieHebergement $categorie,
        EntityManagerInterface $em,
        Request $request
    ): Response {
        $token = $request->request->get('_token');
        $token = is_string($token) ? $token : null;
        if ($this->isCsrfTokenValid('delete' . $categorie->getIdCategorie(), $token)) {
            $em->remove($categorie);
            $em->flush();

            $this->addFlash('success', 'Categorie d\'hebergement supprimee avec succes!');
        }

        return $this->redirectToRoute('admin_categories_hebergement');
    }

    private function handleCategoryImageUpload(CategorieHebergement $categorie, ?UploadedFile $imageFile): void
    {
        if (!$imageFile) {
            return;
        }

        $ext = pathinfo($imageFile->getClientOriginalName(), PATHINFO_EXTENSION);
        $filename = uniqid() . '.' . $ext;
        $projectDir = $this->getParameter('kernel.project_dir');
        if (!is_string($projectDir)) {
            $this->addFlash('error', 'Erreur: kernel.project_dir non configuré');
            return;
        }
        $uploadsDir = $projectDir . '/public/uploads/hebergements/categories';

        if (!is_dir($uploadsDir)) {
            @mkdir($uploadsDir, 0755, true);
        }

        try {
            $imageFile->move($uploadsDir, $filename);
            $categorie->setImagePath('/uploads/hebergements/categories/' . $filename);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'upload de l\'image: ' . $e->getMessage());
        }
    }
}
