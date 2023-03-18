<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinUsController extends Controller
{
    public function index(){
        $title = "Nous rejoindre - BTI - Advisory";
        return view('join-us')->with('title',$title);
    }
}
