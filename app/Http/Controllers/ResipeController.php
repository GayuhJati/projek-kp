<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('resipe.index',["setTitle" => "Home",'reseps'=>$resipe ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
