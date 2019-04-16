<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        $d = array(
                "costumes" => 5284.12,
                "electronics" => 4481.43,
                "office supplies" => 3422.13,
                "home goods" => 1234.21,
            );
        return $this->render('main/index.html.twig', 
                array('data' => $d));
    }
}
