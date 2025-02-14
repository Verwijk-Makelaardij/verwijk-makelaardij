<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TaxerenController extends AbstractController
{
    #[Route('/taxeren', name: 'app_taxeren')]
    public function index(): Response
    {
        return $this->render('taxeren/index.html.twig', [
            'controller_name' => 'TaxerenController',
        ]);
    }
}
