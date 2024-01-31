<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FallouController extends AbstractController
{
    #[Route('/fallou', name: 'app_fallou')]
    public function index(): Response
    {
        return $this->render('fallou/index.html.twig', [
            'controller_name' => 'FallouController',
        ]);
    }
    #[Route('/cv', name: 'cv')]
    public function cv()
    {
        return $this->render('fallou/cv.html.twig', [
        ]);
    }
	#[Route('/portfolio', name: 'portfolio')]
    public function page2()
    {
        return $this->render('fallou/portfolio.html.twig', [
        ]);
    }#[Route('/ensavoirplus', name: 'En savoir plus ')]
    public function ensavoirplus()
    {
        return $this->render('fallou/ensavoirplus.html.twig', [
        ]);
    }
    #[Route('/formulaire ', name: 'formulaire')]
    public function formulaire()
    {
        return $this->render('fallou/formulaire.html.twig', [
        ]);
    }
}
    