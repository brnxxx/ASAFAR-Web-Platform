<?php

namespace App\EventListener;

use App\Entity\User;
use App\Repository\NotificationRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Twig\Environment;

class NotificationListener
{
    public function __construct(
        private NotificationRepository $notifRepo,
        private Security $security,
        private Environment $twig
    ) {
    }

    public function onKernelController(ControllerEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $user = $this->security->getUser();

        if (!$user instanceof User) {
            $this->twig->addGlobal('notifications', []);
            $this->twig->addGlobal('notificationCount', 0);

            return;
        }

        $notifications = $this->notifRepo->findBy(
            [
                'user' => $user,
                'isRead' => false,
            ],
            [
                'createdAt' => 'DESC',
            ]
        );

        $this->twig->addGlobal('notifications', $notifications);
        $this->twig->addGlobal('notificationCount', count($notifications));
    }
}