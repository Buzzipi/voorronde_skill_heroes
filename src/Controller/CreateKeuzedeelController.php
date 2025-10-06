<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CreateKeuzedeelController extends AbstractController
{
    #[Route('/create/keuzedeel', name: 'app_create_keuzedeel')]
    public function index(): Response
    {
        return $this->render('create_keuzedeel/index.html.twig', [
            'controller_name' => 'CreateKeuzedeelController',
        ]);
    }
}
