<?php

namespace App\Controller;

use App\Entity\Theme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemoryController extends AbstractController
{
    /**
     * @Route("/memory", name="memoryIndex")
     */
    public function index(): Response
    {
        return $this->render('memory/index.html.twig', [
            'controller_name' => 'MemoryController',
        ]);
    }


    // Création du routage pour le memory selon son id
    /**
     * @Route("/memory/{id}", name="memory")
     */
    public function memory(Theme $theme): Response
    {
        return $this->render('memory/index.html.twig', [
            'theme' => $theme,
        ]);
    }
}
