<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OverMijController extends AbstractController
{
    #[Route('/over-mij', name: 'app_over_mij')]
    public function index(): Response
    {
        return $this->render('over_mij/over-mij.html.twig', [
            'controller_name' => 'OverMijController',
        ]);
    }
}
