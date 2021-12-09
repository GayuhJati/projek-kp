<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(){
        return view('resipe/create', ["setTitle"=>"Create"]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|max:20',
            'password'=>'required|min:8',
            'image'=>'file|image|max:5000'
        ]);
        $validatedData['image']= $request->file('image')->store('image');
    }
}
