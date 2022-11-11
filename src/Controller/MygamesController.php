<?php

namespace App\Controller;

use App\Entity\Games;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Persistence\ManagerRegistry;


class MygamesController extends AbstractController
{
    #[Route('/mygames', name: 'app_mygames')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $games = $doctrine->getRepository(Games::class)->findAll();

        return $this->render('mygames/index.html.twig', [
            'controller_name' => 'MygamesController',
            'games' => $games,
        ]);
        // return $this->render('mygames/index.html.twig', [
        //     'controller_name' => 'MygamesController',
        // ]);
    }
    #[Route('/mygames/{id}', name: 'app_mygamesid')]
    public function showId($id, ManagerRegistry $doctrine): Response
    {
        $game = $doctrine->getRepository(Games::class)->find($id);

        return $this->render('mygames/show.html.twig', [
            'controller_name' => 'MygamesController',
            'game' => $game,
        ]);
    }
}
