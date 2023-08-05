<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyCaseController extends Controller
{
    //
    public function index(){
        return view("study_cases.index");
    }
    public function total_marketing_france(){
        return view("study_cases.total_marketing_france");
    }
    public function rousselet(){
        return view("study_cases.rousselet");
    }
    public function disneyland_paris(){
        return view("study_cases.disneyland_paris");
    }
    public function elior_group(){
        return view("study_cases.elior_group");
    }
    public function servier(){
        return view("study_cases.servier");
    }
    public function enedis(){
        return view("study_cases.enedis");
    }
    public function randstad(){
        return view("study_cases.randstad");
    }
    public function Médiamétrie(){
        return view("study_cases.Médiamétrie");
    }
    public function docaposte(){
        return view("study_cases.docaposte");
    }
    public function ouisncf(){
        return view("study_cases.ouisncf");
    }
    public function entoria(){
        return view("study_cases.entoria");
    }
    public function ratp(){
        return view("study_cases.ratp");
    }
}
