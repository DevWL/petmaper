<?php

namespace App\Controller;

// use Symfony\Component\Routing\Route; this is not the Route declaration we need for annotation
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function homepage(Request $request)
    {
        return new Response("hello you! You are the SYMFONY MASTER!");
        // return $this->render('index.html.twig');
    }

    /**
     * @Route("/cats")
     */
    public function catspage(Request $request)
    {
        return new Response("This is the cat page");
        // return $this->render('index.html.twig');
    }

    /**
     * @Route("/dogs")
     */
    public function dogspage(Request $request)
    {
        return new Response("This is the dog page");
        // return $this->render('index.html.twig');
    }
    
    /**
     * @Route("/blog/{slug}")
     */
    public function articlespage($slug, Request $request)
    {
        return new Response(sprintf("This is about %s", $slug));
        // return $this->render('index.html.twig');
    }
}