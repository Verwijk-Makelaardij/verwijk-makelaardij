<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VerkoopController extends AbstractController
{
    #[Route('/verkoop', name: 'app_verkoop')]
    public function index(): Response
    {
        return $this->render('verkoop/index.html.twig', [
            'controller_name' => 'VerkoopController',
        ]);
    }
}
