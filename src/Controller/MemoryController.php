<?php

namespace App\Controller;

use App\Entity\Theme;
use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemoryController extends AbstractController
{
    /**
     * @Route("/", name="memoryIndex")
     */
    public function index(ThemeRepository $themes): Response
    {
        $allThemes = $themes->findAll();

        return $this->render('home/index.html.twig', [
            'themes' => $allThemes,
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
