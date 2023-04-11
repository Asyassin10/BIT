<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class JoinUsController extends Controller
{
    public function index(){
        $title = "Nous rejoindre - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('join-us')->with('title',$title)->with('articles',$categories->articles);
    }
}
