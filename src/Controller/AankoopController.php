<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AankoopController extends AbstractController
{
    #[Route('/aankoop', name: 'app_aankoop')]
    public function index(): Response
    {
        return $this->render('aankoop/index.html.twig', [
            'controller_name' => 'AankoopController',
        ]);
    }
}
