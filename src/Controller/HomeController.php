<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
    /**
    * @Route("/", name="app_home")
     */
    public function homepage()
    {

        return $this->render('home/homepage.html.twig');
    }
}