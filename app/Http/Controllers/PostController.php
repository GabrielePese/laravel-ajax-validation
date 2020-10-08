<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller{

    public function index(){
        
        return view('post-index');
    }

    public function create(){

        return view ('create');
    }

    public function store(Request $request){
        $data = $request -> all();
        $data = Post::create($data);

        $validation = $request-> validate([

            'name' => 'required',
            'description' => 'required',
            'like'=> 'required',
            'shares'=> 'required',

            ]);


        return redirect() -> route('home');
    }
}
