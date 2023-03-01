<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AcceuilController extends AbstractController
{
    #[Route(path: '/acceuil', name: 'app_acceuil')]
    public function index(): Response
    {
        

        return $this->render('/acceuil.html.twig');
    }

    
}