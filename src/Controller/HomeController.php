<?php

namespace App\Controller;

use App\Repository\ThemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("noRoute/listTheme", name="listTheme")
     */
    public function menuNavbar(ThemeRepository $themes)
    {
        $allThemes = $themes->findAll();
        
        return $this->render('render/activeTheme.html.twig', [
            'themes' => $allThemes,
        ]);
    }
}
