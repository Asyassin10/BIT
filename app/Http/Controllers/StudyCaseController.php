<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyCaseController extends Controller
{
    //
    public function total_marketing_france(){
        return view("study_cases.total_marketing_france");
    }
    public function rousselet(){
        return view("study_cases.rousselet");
    }
    public function disneyland_paris(){
        return view("study_cases.disneyland_paris");
    }
}
