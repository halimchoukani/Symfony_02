<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LangController extends AbstractController
{
    #[Route('/lang', name: 'app_lang')]
    public function index(): Response
    {
        return $this->render('lang/index.html.twig', [
            'name' => 'Halim Choukani',
            'date' => '2024/02/27',
            'langF' => [
                array('caption' => 'HTML', 'url' => 'http://www.html.com', 'icon' => 'https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_960_720.png'),
                array('caption' => 'CSS', 'url' => 'https://www.w3.org/Style/CSS/Overview.en.html', 'icon' => 'https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582747_960_720.png'),
                array('caption' => 'JS', 'url' => 'https://www.javascript.com/', 'icon' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1024px-Unofficial_JavaScript_logo_2.svg.png'),
                array('caption' => 'SWIFT', 'url' => 'https://www.swift.org/', 'icon' => 'https://i.pinimg.com/originals/30/4a/de/304ade202a2770a7e51b69166225548d.jpg'),
                array('caption' => 'VUE JS', 'url' => 'https://www.vuejs.org/', 'icon' => 'https://cdn.icon-icons.com/icons2/2415/PNG/512/vuejs_original_wordmark_logo_icon_146305.png'),
            ],
            'langB' => [
                array('caption' => 'PHP', 'url' => 'http://www.php.net', 'icon' => 'https://cdn.worldvectorlogo.com/logos/php-1.svg'),
                array('caption' => 'JSP', 'url' => 'https://www.jmdoudoux.fr/java/dej/chap-jsp.htm', 'icon' => 'https://data.jspsafety.com/jsp-whatsapp.png'),
                array('caption' => 'Node JS', 'url' => 'https://nodejs.org/en', 'icon' => 'https://static-00.iconduck.com/assets.00/node-js-icon-454x512-nztofx17.png'),
                array('caption' => '.NET', 'url' => 'https://dotnet.microsoft.com', 'icon' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/.NET_Core_Logo.svg/1024px-.NET_Core_Logo.svg.png'),
                array('caption' => 'Symfony', 'url' => 'symfony.com', 'icon' => 'https://cdn.worldvectorlogo.com/logos/symfony.svg'),
            ],
        ]);
    }
}
