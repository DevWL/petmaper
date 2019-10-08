<?php

namespace App\Controller;

// use Symfony\Component\Routing\Route; // this is not the Route declaration we need for annotation
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; // !depriciated
// use Symfony\Bundle\FrameworkBundle\Controller\Controller; // use AbstractController

use App\Service\FakeDataLoader;
use App\Service\MyFirstService;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // new!
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Twig\Environment;
use Symfony\Component\Cache\Adapter\AdapterInterface;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homePage(FakeDataLoader $fakeDataLoader)
    {
        return $this->render('index.html.twig', 
            [
                "subjects" => $fakeDataLoader->loadIndexData(),
                "routes" => $fakeDataLoader->loadRoutes()
            ]
        );
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactPage(Request $request)
    {
        return new Response("This is the cat page");
        // return $this->render('index.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutPage(Request $request)
    {
        return new Response("This is the dog page");
        // return $this->render('index.html.twig');
    }

    /**
     * @Route("/search", name="search")
     */
    public function searchPage(Request $request)
    {
        return new Response("This is the dog page");
        // return $this->render('index.html.twig');
    }
    
    /**
     * @Route("/animal/{slug}", name="animal")
     */
    public function animal($slug, LoggerInterface $logger, MyFirstService $myFirstService, FakeDataLoader $fakeDataLoader)
    {

        $html = $myFirstService->getAnimalTwig(
            $slug, 
            $subject = $fakeDataLoader->loadAnimalData($slug), 
            $routes = $fakeDataLoader->loadRoutes(),
        );

        return new Response($html);

        // return $this->render('animal.html.twig', 
        //     [
        //         "slug" => strtoupper($slug),
        //         "subject" => $subject,
        //         "routes" => $this->routes
        //     ]
        // );
    }


    /**
     * methods={"POST"}
     * @Route("/animal/{slug}/heart", name="api_heart_toggle")
     */
    public function apiHart(Request $request)
    {
        // TODO - heart/unheart the article by slug or id...
        // return new Response(\json_encode(['hearts'=> \rand(0,100)]));
        // return new JsonResponse(['hearts' => \rand(0,100)]);
        return $this->json([
            'hearts' => \rand(0,100),
            'userVouted' => !!!rand(0,1)
        ]);
    }
}