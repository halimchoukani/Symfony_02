<?php
//TP Twig: sami melki
// src/Controller/TwigMailController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TwigmailController extends AbstractController
{
    public function send_mail()
    {
        return $this->render('sendmail.html.twig', array('a' => ''));
    }
}
