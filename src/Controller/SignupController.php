<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Users;
use App\Form\UserFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

//for encrypting passwords upon account creation
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface; //this interface makes sure you can easily hash yan inputted password
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

final class SignupController extends AbstractController
{
    #[Route('/signup', name: 'app_signup')]
    public function index(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $UserPasswordHasherInterface): Response
    {
        $user = new Users();

        $form = $this->createForm(UserFormType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            
            $form_data = $form->getData();

            $plain_password = $form_data->getPassword();

            $hashed_password = $UserPasswordHasherInterface->hashPassword($user, $plain_password);
            $user->setPassword($hashed_password);

            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('signup/index.html.twig', ['UserFormType' => $form]);
    }
}
