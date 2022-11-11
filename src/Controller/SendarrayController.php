<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SendarrayController extends AbstractController
{
    #[Route('/sendarray', name: 'app_sendarray')]
    public function index(): Response
    {
        $colors = array('red', 'green', 'blue', 'yellow', 'brown', 'purple', 'orange', 'black', 'white', 'gray');

        $names = array(
            array('John', 'Smith'),
            array('Jane', 'Doe'),
            array('Peter', 'Parker'),
            array('Clark', 'Kent'),
            array('Bruce', 'Wayne'),
            array('Tony', 'Stark'),
            array('Steve', 'Rogers'),
            array('Natasha', 'Romanoff'),
            array('Thor', 'Odinson'),
            array('Wanda', 'Maximoff')
        );

        return $this->render('sendarray/index.html.twig', [
            'controller_name' => 'SendarrayController',
            'colors' => $colors,
            'names' => $names,
        ]);
    }
}
