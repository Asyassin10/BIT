<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $title = "Nos service - BTI - Advisory";
        return view('services.all-service')->with('title',$title);
    }

    public function show(){
        $title = "Service 1 - BTI - Advisory";
        return view('services.service')->with('title',$title);
    }
}
