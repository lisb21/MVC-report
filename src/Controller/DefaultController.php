<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{   
     /**
     * @Route("/", name="default")
     */
    public function number(): Response
    {
        return $this->render('report/default.html.twig');
    }
}