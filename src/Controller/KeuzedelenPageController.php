<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class KeuzedelenPageController extends AbstractController
{
    #[Route('/keuzedelen/page', name: 'app_keuzedelen_page')]
    public function index(): Response
    {
        return $this->render('keuzedelen_page/index.html.twig', [
            'controller_name' => 'KeuzedelenPageController',
        ]);
    }
}
