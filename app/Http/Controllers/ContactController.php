<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $title = "Contactez-nous - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('contact-us')->with('title',$title)->with('articles',$categories->articles);
    }
}
