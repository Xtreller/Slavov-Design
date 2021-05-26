<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class Posts extends Controller
{
    public function posts(){
        $posts = ['astronomy'=>'lorem10', 'physics'=>'lorem15', 'IT'=>'lorem20'];
        return view('posts.index')->with('posts',$posts);
    }
}
