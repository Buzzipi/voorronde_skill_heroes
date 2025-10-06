<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class KeuzedeelUpdateController extends AbstractController
{
    #[Route('/keuzedeel/update', name: 'app_keuzedeel_update')]
    public function index(): Response
    {
        return $this->render('keuzedeel_update/index.html.twig', [
            'controller_name' => 'KeuzedeelUpdateController',
        ]);
    }
}
