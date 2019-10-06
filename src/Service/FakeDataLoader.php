<?php 

namespace App\Service;

class FakeDataLoader
{
    public function loadIndexData()
    {
        $subjects = [
            [
                'id' => '12312',
                'slug' => 'filipek',
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
                'slug' => 'diana',
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
                'slug' => 'dejzi',
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
        return $subjects;
    }

    public function loadAnimalData($slug) : array
    {
        $subject = [
            'id' => '33423',
            'slug' => $slug,
            'likes' => '0',
            'name' => $slug,
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
        ];
        return $subject;
    }
    
}
