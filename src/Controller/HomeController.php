<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController {

    public function menu(): Response {
        return $this->render('menu.html.twig');
    }
}
