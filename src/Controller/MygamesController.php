<?php

namespace App\Controller;

use Knp\Snappy\Pdf;
use App\Entity\Games;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;



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

    #[Route('/mygames/{id}/pdf', name: 'app_mygamesidpdf')]
    public function showIdPdf($id, Pdf $knpSnappyPdf, ManagerRegistry $doctrine): Response
    {

        $game = $doctrine->getRepository(Games::class)->find($id);
        $html = $this->renderView('mygames/show.html.twig', [
            'controller_name' => 'MygamesController',
            'game' => $game,
        ]);
        $filename = 'mygames';
        return new PdfResponse(
            $knpSnappyPdf->getOutputFromHtml($html),
            $filename.'.pdf'
        );
        //$pageUrl = $this->generateUrl('app_mygamesid', ['id' => $id], UrlGeneratorInterface::ABSOLUTE_URL);
        //$knpSnappyPdf->setTimeout(300);
        // $filename = 'game_'.$id.'.pdf';
        // $pdf = $knpSnappyPdf->getOutput($pageUrl);
        // return new Response();
        // return new PdfResponse(
        //     $knpSnappyPdf->getOutput($pageUrl),
        //     $filename
        // );
        // return new PdfResponse(
        //     $knpSnappyPdf->getOutput($pageUrl),
        //     'file.pdf'
        // );

    }
}
