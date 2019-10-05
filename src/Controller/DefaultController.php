<?php

namespace App\Controller;

// use Symfony\Component\Routing\Route; // this is not the Route declaration we need for annotation
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; // !depriciated
// use Symfony\Bundle\FrameworkBundle\Controller\Controller; // use AbstractController
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // new!
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends AbstractController
{
    public $routes = [
        ['route'=>'home', 'name'=>'home'],
        ['route'=>'contact', 'name'=>'contact'],
        ['route'=>'about', 'name'=>'about'],
        ['route'=>'search', 'name'=>'search'],
        ['route'=>'category', 'name'=>'category'],
    ];

    /**
     * @Route("/", name="home")
     */
    public function homePage(Request $request)
    {
        $subjects = [
            [
                'id' => '12312',
                'likes' => '0',
                'name' => 'Filipek',
                'category' => 'dog',
                'breed' => 'mongrel',
                'images' => [
                    'https://hellobark.com/wp-content/uploads/shiro-akita-2.jpg',
                    'https://hellobark.com/wp-content/uploads/shiro-akita-1.jpg',
                ],
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi. <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi. <br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi. ",
                'age' => 20,
                'geospetial' =>
                    [
                        'lat' => 19.7223472, 'long' => 56.12342344
                    ]
            ],
            [
                'id' => '23423',
                'likes' => '0',
                'name' => 'Diana',
                'category' => 'dog',
                'breed' => 'mongrel',
                'images' => [
                    'https://psy-pies.com/pliki/image/foto/duze/foto5651a2420a868.jpg',
                    'https://psy-pies.com/pliki/image/artykuly/hodowla/duze/wystawa-psow3160.jpg',
                    'https://psy-pies.com/pliki/image/artykuly/nasz-pies/duze/rodzina-owczarkow-niemieckich3130.jpg',
                ],
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.",
                'age' => 21,
                'geospetial' =>
                    [
                        'lat' => 45.7223472, 'long' => 21.12342344
                    ]
            ],
            [
                'id' => '33423',
                'likes' => '0',
                'name' => 'Dejzi',
                'category' => 'dog',
                'breed' => 'mongrel',
                'images' => [
                    'https://apollo-ireland.akamaized.net/v1/files/ucx9e1q0ni101-PL/image;s=644x461',
                    'https://apollo-ireland.akamaized.net/v1/files/nrlaxjecip0m1-PL/image;s=644x461',
                    'https://apollo-ireland.akamaized.net/v1/files/amk0nvt9bcgw-PL/image;s=644x461',
                    'https://apollo-ireland.akamaized.net/v1/files/o8uu1oei8kpb1-PL/image;s=644x461',
                ],
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.",
                'age' => 31,
                'geospetial' =>
                    [
                        'lat' => 45.7223472, 'long' => 21.12342344
                    ]
            ],
        ];
        
        return $this->render('index.html.twig', 
            [
                "subjects" => $subjects,
                "routes" => $this->routes
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
     * @Route("/category/{slug}", name="category")
     */
    public function category($slug, Request $request)
    {
        $subjects = [
            [
                'id' => '12312',
                'likes' => '0',
                'name' => 'Filipek',
                'category' => 'dog',
                'breed' => 'mongrel',
                'images' => [
                    'https://hellobark.com/wp-content/uploads/shiro-akita-2.jpg',
                    'https://hellobark.com/wp-content/uploads/shiro-akita-1.jpg',
                ],
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi. <br> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi. <br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi. ",
                'age' => 10,
                'geospetial' =>
                    [
                        'lat' => 19.7223472, 'long' => 56.12342344
                    ]
            ],
            [
                'id' => '23423',
                'likes' => '0',
                'name' => 'Diana',
                'category' => 'dog',
                'breed' => 'mongrel',
                'images' => [
                    'https://psy-pies.com/pliki/image/foto/duze/foto5651a2420a868.jpg',
                    'https://psy-pies.com/pliki/image/artykuly/hodowla/duze/wystawa-psow3160.jpg',
                    'https://psy-pies.com/pliki/image/artykuly/nasz-pies/duze/rodzina-owczarkow-niemieckich3130.jpg',
                ],
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.",
                'age' => 11,
                'geospetial' =>
                    [
                        'lat' => 45.7223472, 'long' => 21.12342344
                    ]
            ],
            [
                'id' => '33423',
                'likes' => '0',
                'name' => 'Dejzi',
                'category' => 'dog',
                'breed' => 'mongrel',
                'images' => [
                    'https://apollo-ireland.akamaized.net/v1/files/ucx9e1q0ni101-PL/image;s=644x461',
                    'https://apollo-ireland.akamaized.net/v1/files/nrlaxjecip0m1-PL/image;s=644x461',
                    'https://apollo-ireland.akamaized.net/v1/files/amk0nvt9bcgw-PL/image;s=644x461',
                    'https://apollo-ireland.akamaized.net/v1/files/o8uu1oei8kpb1-PL/image;s=644x461',
                ],
                'description' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, reprehenderit porro quo nulla, in id explicabo quidem optio repellendus dolorum, aperiam voluptatum labore ducimus magni debitis tempore provident laborum. Commodi.",
                'age' => 11,
                'geospetial' =>
                    [
                        'lat' => 45.7223472, 'long' => 21.12342344
                    ]
            ],
        ];
        
        return $this->render('category.html.twig', 
            [
                "slug" => strtoupper($slug),
                "subjects" => $subjects,
                "routes" => $this->routes
            ]
        );
    }


    /**
     * @Route("/category/{slug}/heart", name="api_heart_toggle", methods={"POST"})
     */
    public function apiHart(Request $request)
    {
        //TODO - heart/unheart the article by slug or id...
        // return new Response(\json_encode(['hearts'=>'5']));
        // return new JsonResponse(['hearts' => \rand(0,100)]);
        return $this->json([
            'hearts' => \rand(0,100),
            'userVouted' => !!!rand(0,1)
        ]);
    }
}