<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalNotice extends Controller
{
    public function index()
    {
        $title = 'Mentions légales - BTI - Advisory';
        return view('mentions-legales')->with('title', $title);
    }
}
