<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class KeuzedeelDeleteController extends AbstractController
{
    #[Route('/keuzedeel/delete', name: 'app_keuzedeel_delete')]
    public function index(): Response
    {
        return $this->render('keuzedeel_delete/index.html.twig', [
            'controller_name' => 'KeuzedeelDeleteController',
        ]);
    }
}
