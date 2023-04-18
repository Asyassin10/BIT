<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cgu extends Controller
{
    public function index()
    {
        $title = 'CGU - BTI - Advisory';
        return view('cgu')->with('title', $title);
    }
}
