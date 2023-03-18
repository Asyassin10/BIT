<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $title = "Contactez-nous - BTI - Advisory";
        return view('contact-us')->with('title',$title);
    }
}
