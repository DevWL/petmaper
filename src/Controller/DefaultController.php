<?php

namespace App\Controller;

// use Symfony\Component\Routing\Route; // this is not the Route declaration we need for annotation
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
// use Symfony\Bundle\FrameworkBundle\Controller\Controller; // use AbstractController
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homePage(Request $request)
    {
        return new Response("hello you! You are the SYMFONY MASTER!");
        // return $this->render('index.html.twig');
    }

    /**
     * @Route("/contact")
     */
    public function contactPage(Request $request)
    {
        return new Response("This is the cat page");
        // return $this->render('index.html.twig');
    }

    /**
     * @Route("/about")
     */
    public function aboutPage(Request $request)
    {
        return new Response("This is the dog page");
        // return $this->render('index.html.twig');
    }

    /**
     * @Route("/search")
     */
    public function searchPage(Request $request)
    {
        return new Response("This is the dog page");
        // return $this->render('index.html.twig');
    }
    
    /**
     * @Route("/category/{slug}")
     */
    public function category($slug, Request $request)
    {
        $subjects = [
            [
                'id' => '12312',
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
                'name' => 'Diana',
                'category' => 'dog',
                'breed' => 'mongrel',
                'images' => [
                    'https://i.imgur.com/FRTzH9G.jpg',
                    'https://i.imgur.com/TnzKsGj.jpg',
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
                "subjects" => $subjects
            ]
        );
    }
}