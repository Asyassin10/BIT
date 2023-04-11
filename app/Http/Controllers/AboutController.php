<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AboutController extends Controller
{
    public function index(){
        $title = "À propos - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('a-propos')->with('title', $title)->with("articles",$categories->articles);;
    }
}
