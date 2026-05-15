<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    use TargetPathTrait;

    private RouterInterface $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onAuthenticationSuccess(
        Request $request,
        TokenInterface $token
    ): RedirectResponse {
        $user = $token->getUser();

        // retourner vers la page demandée avant login
        $targetPath = $this->getTargetPath(
            $request->getSession(),
            'main'
        );

        if ($targetPath) {
            return new RedirectResponse($targetPath);
        }

        // sinon comportement normal
        if (
            $user instanceof UserInterface &&
            in_array('ROLE_ADMIN', $user->getRoles(), true)
        ) {
            return new RedirectResponse(
                $this->router->generate('admin_dashboard')
            );
        }

        return new RedirectResponse(
            $this->router->generate('home')
        );
    }
}