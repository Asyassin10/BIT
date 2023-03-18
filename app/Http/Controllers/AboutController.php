<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = "À propos - BTI - Advisory";
        return view('a-propos')->with('title', $title);
    }
}
