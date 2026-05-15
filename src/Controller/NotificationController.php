<?php

namespace App\Controller;
use App\Entity\User;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class NotificationController extends AbstractController
{
    #[Route('/notifications/read', name: 'notifications_read', methods: ['POST'])]
    public function markAsRead(
        NotificationRepository $repo,
        EntityManagerInterface $em,
        Security $security
    ): JsonResponse {


       $user = $security->getUser();

if (!$user) {
    return $this->json(['success' => false], 401);
}

/** @var \App\Entity\User $user */
$notifications = $repo->findBy([
    'userId' => $user->getId(),
    'isRead' => false
]);

$notifications = $repo->findBy([
    'userId' => $user->getId(),
    'isRead' => false
]);

        foreach ($notifications as $notif) {
            $notif->setIsRead(true);
        }

        $em->flush();

        return $this->json(['success' => true]);
    }
}