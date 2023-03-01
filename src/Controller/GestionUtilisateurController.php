<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\UserRepository;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class GestionUtilisateurController extends AbstractController
{
    #[Route(path: '/gestionUtilisateur', name: 'app_gestion_utilisateur')]
    public function index(UserRepository $userRepository): Response
    {
        
        
        return $this->render('/gestionUtilisateur.html.twig',[
            'users' => $userRepository->findAll(),
        ]);
    }

    
}