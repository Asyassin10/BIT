<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class ContactController extends Controller
{
    public function index()
    {

        $title = "Contactez-nous - BTI - Advisory";
        $categories = Category::where("url_presentation", $title)->first();
      //  Redis::set("Contactez_nous_BTI_Advisory", json_encode($categories->articles));
        return view('contact-us')->with('title', $title)->with("articles", $categories->articles);
    }
}
