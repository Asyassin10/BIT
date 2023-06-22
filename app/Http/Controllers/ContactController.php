<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class ContactController extends Controller
{
    public function index()
    {
        /* $title = "Contactez-nous - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('contact-us')->with('title',$title)->with('articles',$categories->articles); */
        //Contactez_nous_BTI_Advisory
        $title = "Contactez-nous - BTI - Advisory";
        /* $redis_data = json_decode( Redis::get("Contactez_nous_BTI_Advisory"));
        $title = "BTI - Advisory - Cabinet de conseil en IT";
        if($redis_data){
            //return "hhhh";

            return view('contact-us')->with('title', $title)->with("articles",$redis_data);
        }else{
            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("Contactez_nous_BTI_Advisory", json_encode($categories->articles));
            return view('contact-us')->with('title', $title)->with("articles",$categories->articles);
        } */
        $categories = Category::where("url_presentation", $title)->first();
        Redis::set("Contactez_nous_BTI_Advisory", json_encode($categories->articles));
        return view('contact-us')->with('title', $title)->with("articles", $categories->articles);
    }
}
