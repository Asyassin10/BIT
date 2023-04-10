<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $title = "Nos service - BTI - Advisory";
        return view('services.all-service')->with('title', $title);
    }

    public function show()
    {

        $title = "Technologie & Innovation - BTI - Advisory";
        return view('services.technologie-innovation')->with('title', $title);
    }

    public function multi_speed_it()
    {
        $title = "Multi-Speed IT - BTI - Advisory";
        return view('services.multi-speed-it')->with('title', $title);
    }

    public function transformation_produits_it()
    {
        $title = "Transformation des Produits IT - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        //return $categories->articles;
        return view('services.transformation-des-produits-it')->with('title', $title)->with("articles",$categories->articles);
    }

    public function transformation_ux()
    {
        $title = "Transformation UX - BTI - Advisory";
        return view('services.transformation-ux')->with('title', $title);
    }
}
