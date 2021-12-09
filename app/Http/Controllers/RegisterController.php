<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'image' => 'file|image|max:5000',
        ]);
        $validatedData['image']= $request->file('image')->store('image');

        Akun::create([
            'username' => $validatedData['username'],
            'password' => $validatedData['password'],
            'image' => $validatedData['image'],
        ]);
        return redirect()->with('succes','you have succesfully registered! you can logi now');
    }
    public function create(){
        return view('register.store');
    }
}
