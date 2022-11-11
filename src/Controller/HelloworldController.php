<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloworldController extends AbstractController
{
    #[Route('/helloworld', name: 'app_helloworld')]
    public function index(): Response
    {
        return $this->render('helloworld/index.html.twig', [
            'controller_name' => 'HelloworldController',
        ]);
    }

    #[Route('/cv7', name: 'app_cv7')]
    public function cv07(): Response
    {
        return $this->render('helloworld/index.html.twig', [
            'controller_name' => 'HelloworldController',
        ]);
    }

    #[Route('/hello/{name}', name: 'app_helloname')]
    public function showName($name): Response
    {
        return new Response(sprintf('Hello, %s', $name));
    } 
}
