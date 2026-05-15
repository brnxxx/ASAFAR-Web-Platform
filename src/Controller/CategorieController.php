<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Form\CategorieType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/admin/categorie')]
class CategorieController extends AbstractController
{
    #[Route('/', name: 'admin_categorie_index')]
    public function index(Request $request, CategorieRepository $repo, EntityManagerInterface $em): Response
    {
        $categorie = new Categorie();

        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('imageFile')->getData();

            if ($file) {
                $filename = uniqid() . '.' . $file->guessExtension();

                try {
                    $projectDir = $this->getParameter('kernel.project_dir');
                    if (!is_string($projectDir)) {
                        throw new \RuntimeException('kernel.project_dir must be a string');
                    }
                    $file->move($projectDir . '/public/images/loisirs', $filename);
                } catch (FileException $e) {}

                $categorie->setImage($filename);
            }

            $em->persist($categorie);
            $em->flush();

            return $this->redirectToRoute('admin_categorie_index');
        }

        $search = $request->query->get('search');
        $sort   = $request->query->get('sort');

        $qb = $repo->createQueryBuilder('c');

        if ($search) {
            $qb->andWhere('c.nom LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($sort === 'nom_asc') {
            $qb->orderBy('c.nom', 'ASC');
        } elseif ($sort === 'nom_desc') {
            $qb->orderBy('c.nom', 'DESC');
        } else {
            $qb->orderBy('c.id', 'DESC');
        }

        $categories = $qb->getQuery()->getResult();

        return $this->render('admin/categorie/index.html.twig', [
            'categories' => $categories,
            'form'       => $form->createView(),
        ]);
    }

    #[Route('/edit/{id}', name: 'admin_categorie_edit')]
    public function edit(int $id, Request $request, CategorieRepository $repo, EntityManagerInterface $em): Response
    {
        $categorie = $repo->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException('Catégorie non trouvée');
        }

        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('imageFile')->getData();

            if ($file) {
                $filename = uniqid() . '.' . $file->guessExtension();

                $projectDir = $this->getParameter('kernel.project_dir');
                if (!is_string($projectDir)) {
                    throw new \RuntimeException('kernel.project_dir must be a string');
                }
                $file->move($projectDir . '/public/images/loisirs', $filename);

                $categorie->setImage($filename);
            }

            $em->flush();

            return $this->redirectToRoute('admin_categorie_index');
        }

        return $this->render('admin/categorie/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id}', name: 'admin_categorie_delete')]
    public function delete(int $id, CategorieRepository $repo, EntityManagerInterface $em): Response
    {
        $categorie = $repo->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException('Catégorie non trouvée');
        }

        $em->remove($categorie);
        $em->flush();

        return $this->redirectToRoute('admin_categorie_index');
    }
}