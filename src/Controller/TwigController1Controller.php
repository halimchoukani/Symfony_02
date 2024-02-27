<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TwigController1Controller extends AbstractController
{
    #[Route('/', name: 'app_twig_controller1')]
    public function index(): Response
    {
        return $this->render('twig_controller1/index.html.twig', [
            'nom_iset' => 'RADES',
        ]);
    }
    public function affiche_exp1(): Response
    {
        return $this->render('twig_controller1/index.html.twig', [
            'nom_iset' => 'fzfze',
        ]);
    }
    public function search_engine(): Response
    {
        $search = [
            array('caption' => 'Google', 'url' => 'http://www.google.com'),
            array('caption' => 'Yahoo', 'url' => 'http://www.yahoo.com'),
            array('caption' => 'Bing', 'url' => 'http://www.bing.com'),
            array('caption' => 'Ask', 'url' => 'http://www.ask.com'),
            array('caption' => 'AOL', 'url' => 'http://www.aol.com'),
            array('caption' => 'Lycos', 'url' => 'http://www.lycos.com'),
            array('caption' => 'Excite', 'url' => 'http://www.excite.com'),
            array('caption' => 'Altavista', 'url' => 'http://www.altavista.com'),
            array('caption' => 'Alltheweb', 'url' => 'http://www.alltheweb.com'),

        ];
        return $this->render('twig_controller1/search_engine.html.twig', [
            'moteurs' => $search, 'nom' => 'HALIM',
        ]);
    }
}
