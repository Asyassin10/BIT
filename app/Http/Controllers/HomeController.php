<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = "BTI - Advisory - Cabinet de conseil en IT";
        return view('home')->with('title',$title);
    }
}
