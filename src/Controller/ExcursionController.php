<?php

namespace App\Controller;

use App\Service\WeatherService;
use App\Entity\Excursion;
use App\Form\ExcursionType;
use App\Repository\ExcursionRepository;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/admin/excursion')]
class ExcursionController extends AbstractController
{
    #[Route('/', name: 'admin_excursion_index')]
    public function index(
        Request $request,
        ExcursionRepository $repo,
        CategorieRepository $catRepo,
        EntityManagerInterface $em
    ): Response {

        $excursion = new Excursion();

        $form = $this->createForm(ExcursionType::class, $excursion);
        $form->handleRequest($request);

        $showModal = false;

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('imageFile')->getData();

            if ($file !== null) {

                $extension = $file->guessExtension() ?: 'bin';
                $filename  = uniqid() . '.' . $extension;

                try {
                    // FIX :48 — is_string() guard instead of bare concatenation
                    $projectDir = $this->getParameter('kernel.project_dir');
                    if (!is_string($projectDir)) {
                        throw new \RuntimeException('kernel.project_dir must be a string');
                    }
                    $file->move($projectDir . '/public/uploads', $filename);
                } catch (FileException $e) {
                    dd('Erreur upload fichier');
                }

                $excursion->setImageUrl($filename);
            }

            $em->persist($excursion);
            $em->flush();

            return $this->redirectToRoute('admin_excursion_index');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $showModal = true;
        }

        $search           = trim((string) $request->query->get('search', ''));
        $categoryId       = $request->query->getInt('categorie', 0);
        $currentCategorie = $categoryId > 0 ? $categoryId : null;
        $sort             = (string) $request->query->get('sort', 'date');

        $isAjaxSearch = $request->isXmlHttpRequest();
        $maxResults   = $isAjaxSearch ? 200 : null;

        $excursions = $repo->findForAdmin($search, $currentCategorie, $sort, $maxResults);

        if ($isAjaxSearch) {
            return $this->render('admin/excursion/_table.html.twig', [
                'excursions' => $excursions,
            ]);
        }

        $stats = [
            'total'        => count($excursions),
            'active'       => count($excursions),
            'newThisMonth' => count($excursions),
        ];

        return $this->render('admin/excursion/index.html.twig', [
            'excursions'       => $excursions,
            'categories'       => $catRepo->findAll(),
            'currentCategorie' => $currentCategorie,
            'search'           => $search,
            'sort'             => $sort,
            'stats'            => $stats,
            'form'             => $form->createView(),
            'showModal'        => $showModal,
        ]);
    }

    // FIX :102 — add return type Response
    #[Route('/edit/{id}', name: 'admin_excursion_edit', methods: ['POST'])]
    public function edit(
        int $id,
        Request $request,
        ExcursionRepository $repo,
        EntityManagerInterface $em
    ): Response {
        $excursion = $repo->find($id);

        if (!$excursion) {
            throw $this->createNotFoundException();
        }

        $form = $this->createForm(ExcursionType::class, $excursion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('admin_excursion_index');
        }

        return $this->redirectToRoute('admin_excursion_index');
    }

    // FIX :126 — add int type to $id
    #[Route('/delete/{id}', name: 'admin_excursion_delete')]
    public function delete(int $id, ExcursionRepository $repo, EntityManagerInterface $em): Response
    {
        $excursion = $repo->find($id);

        if (!$excursion) {
            throw $this->createNotFoundException('Excursion non trouvée');
        }

        $em->remove($excursion);
        $em->flush();

        return $this->redirectToRoute('admin_excursion_index');
    }

    #[Route('/search', name: 'admin_excursion_search')]
    public function search(Request $request, ExcursionRepository $repo): JsonResponse
    {
        $q = trim((string) $request->query->get('q', ''));

        if ($q === '' || mb_strlen($q) < 2) {
            return $this->json([]);
        }

        $results = $repo->createQueryBuilder('e')
            ->leftJoin('e.categorie', 'c')
            ->addSelect('c')
            ->where('e.titre LIKE :q OR e.lieu LIKE :q')
            ->setParameter('q', '%' . $q . '%')
            ->getQuery()
            ->getResult();

        $data = [];

        foreach ($results as $e) {
            $data[] = [
                'titre'     => $e->getTitre(),
                'lieu'      => $e->getLieu(),
                'prix'      => $e->getPrixAdulte(),
                'date'      => $e->getDate()->format('d/m/Y'),
                'categorie' => $e->getCategorie()?->getNom(),
            ];
        }

        return $this->json($data);
    }
}