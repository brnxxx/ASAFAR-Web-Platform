<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\PromoCode;
use App\Repository\PromoCodeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PromoCodeController extends AbstractController
{
    #[Route('/mes-promos', name: 'app_my_promos')]
    public function myPromos(PromoCodeRepository $promoRepo): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $promos = $promoRepo->findBy([
            'user' => $user,
            'actif' => true
        ]);

        return $this->render('promo/my_promos.html.twig', [
            'promos' => $promos
        ]);
    }

    #[Route('/apply-promo', name: 'app_apply_promo', methods: ['POST'])]
    public function applyPromo(Request $request, PromoCodeRepository $promoRepo): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

$code = $request->request->get('promo_code');

if (!$code) {
    $this->addFlash('error', '⚠️ Code vide');
    return $this->redirectToRoute('app_my_promos');
}

$promo = $promoRepo->findValidCode((string) $code);

        if (!$promo || $promo->getUser() !== $user) {
            $this->addFlash('error', '❌ Code invalide ou non autorisé');
            return $this->redirectToRoute('app_my_promos');
        }

        $request->getSession()->set('promo_code', $promo->getCode());

        $this->addFlash('success', '🎉 Code promo appliqué !');

        return $this->redirectToRoute('app_home');
    }

    #[Route('/generate-promo', name: 'app_generate_promo')]
    public function generatePromo(
        PromoCodeRepository $promoRepo,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        if ($user->getFidelityPoints() < 100) {
            $this->addFlash('error', '❌ Pas assez de points');
            return $this->redirectToRoute('app_my_promos');
        }

        $existingPromo = $promoRepo->findOneBy([
            'user' => $user,
            'actif' => true
        ]);

        if ($existingPromo) {
            $this->addFlash('error', '⚠️ Vous avez déjà un code actif');
            return $this->redirectToRoute('app_my_promos');
        }

        $promo = new PromoCode();
        $promo->setCode('FID' . strtoupper(bin2hex(random_bytes(3))));
        $promo->setPourcentage(10);
        $promo->setUser($user);
        $promo->setActif(true);
        $promo->setDateExpiration((new \DateTime())->modify('+7 days'));

        $user->setFidelityPoints($user->getFidelityPoints() - 100);

        $em->persist($promo);
        $em->persist($user);
        $em->flush();

        $this->addFlash('success', '🎁 Code promo généré avec succès !');

        return $this->redirectToRoute('app_my_promos');
    }
}