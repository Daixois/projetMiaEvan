<?php

namespace App\Controller;

use App\Repository\ThemeRepository;
use PhpParser\Node\Expr\Cast\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(ThemeRepository $themes): Response
    {

        $allThemes = $themes->findAll();
        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'themes' => $allThemes,
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
