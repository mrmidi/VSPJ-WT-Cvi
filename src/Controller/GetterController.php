<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class GetterController extends AbstractController
{
    #[Route('/getter', name: 'app_getter')]
    public function index(): Response
    {
        $request = Request::createFromGlobals();
        $name = strtoupper($request->query->get('name'));
        
        return $this->render('getter/index.html.twig', [
            'controller_name' => 'GetterController',
            'name' => $name,
        ]);
    }
}
