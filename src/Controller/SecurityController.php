<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
#[Route(path: '/login', name: 'app_login')]
public function login(AuthenticationUtils $authenticationUtils, Security $security): Response
{
// On récupère l'utilisateur connecté
$user = $security->getUser();

// On vérifie si l'utilisateur est connecté et a le rôle "ROLE_ADMIN"
if ($user && in_array('ROLE_ADMIN', $user->getRoles(), true)) {
return $this->redirect('/login');
} 

// Le reste du code pour le formulaire de connexion
$error = $authenticationUtils->getLastAuthenticationError();
$lastUsername = $authenticationUtils->getLastUsername();

return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
}

#[Route(path: '/logout', name: 'app_logout')]
public function logout(): void
{
throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
}
}