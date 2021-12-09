<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        $resipe=[
            [
            "id"=> "1",
            "title"=>"Soto Lamongan",
            "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque id doloremque nulla reiciendis molestiae modi quod autem labore veniam delectus? Distinctio alias eius tempore quidem possimus facilis minus earum voluptatibus voluptatum ab inventore ipsam quo, dolores impedit quod officiis illum nesciunt voluptatem officia ad blanditiis cumque. Quam inventore numquam, ipsum cupiditate atque quos blanditiis iste maxime veniam in hic nulla, ut sint, sunt minima? Saepe rerum nihil deserunt vero modi dolore necessitatibus exercitationem enim quia nobis quisquam dicta asperiores, soluta temporibus neque itaque architecto doloribus accusantium. Alias eligendi magni nesciunt nihil, magnam, inventore minus consequuntur numquam, porro eum ducimus recusandae.",
            "writer"=>"Tono",
            "image"=>"https://dummyimage.com/600x400/000/fff",
            "tags"=>"laravel"
            ],
            [
                "id"=> "2",
                "title"=>"Soto Lamongan",
                "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque id doloremque nulla reiciendis molestiae modi quod autem labore veniam delectus? Distinctio alias eius tempore quidem possimus facilis minus earum voluptatibus voluptatum ab inventore ipsam quo, dolores impedit quod officiis illum nesciunt voluptatem officia ad blanditiis cumque. Quam inventore numquam, ipsum cupiditate atque quos blanditiis iste maxime veniam in hic nulla, ut sint, sunt minima? Saepe rerum nihil deserunt vero modi dolore necessitatibus exercitationem enim quia nobis quisquam dicta asperiores, soluta temporibus neque itaque architecto doloribus accusantium. Alias eligendi magni nesciunt nihil, magnam, inventore minus consequuntur numquam, porro eum ducimus recusandae.",
                "writer"=>"Tono",
                "image"=>"https://dummyimage.com/600x400/000/fff",
                "tags"=>"laravel"
                ]
        ];
        return view('explore',["setTitle" => "explore",'reseps'=>$resipe ]);
    }
}
