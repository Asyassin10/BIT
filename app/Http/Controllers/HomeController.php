<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "BTI - Advisory - Cabinet de conseil en IT";
        $categories = Category::where("url_presentation",$title)->first();
        return view('home')->with('title',$title)->with('articles',$categories->articles);
    }
}
