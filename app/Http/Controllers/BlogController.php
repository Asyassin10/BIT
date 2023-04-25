<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $title = "Blog - BTI - Advisory";
        return view('blog.posts')->with('title',$title);
    }


}
