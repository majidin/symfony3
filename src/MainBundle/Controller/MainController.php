<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function indexAction()
    {


        return $this->render('default/main.html.twig');


    }
}
//return $this->render('MainBundle:Advert:main.html.twig');

//return new Response("<html><body><h1>Hello World !</h1></body></html>");