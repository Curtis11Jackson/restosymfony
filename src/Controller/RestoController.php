<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RestoController extends AbstractController
{
    /**
     * @Route("/resto", name="resto")
     */
    public function index()
    {
        return $this->render('resto/index.html.twig', [
            'controller_name' => 'RestoController',
        ]);
    }

      /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('resto/home.html.twig');
    }
      /**
     * @Route("/resto/12", name="resto_show")
     */
    public function show()
    {
        return $this->render('resto/show.html.twig');
    }

}
