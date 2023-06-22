<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redis;

class AboutController extends Controller
{
    public function index()
    {
        /* $title = "À propos - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        //return $categories->articles;
        return view('a-propos')->with('title', $title)->with("articles",$categories->articles); */
        /* $redis_data = json_decode( Redis::get("a_propos_BTI_Advisory"));
        $title = "À propos - BTI - Advisory";
        if($redis_data){
            //return "hhhh";

            return view('a-propos')->with('title', $title)->with("articles",$redis_data);
        }else{
            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("a_propos_BTI_Advisory", json_encode($categories->articles));
            return view('a-propos')->with('title', $title)->with("articles",$categories->articles);
        } */
        $title = "À propos - BTI - Advisory";
        $categories = Category::where("url_presentation", $title)->first();
        Redis::set("a_propos_BTI_Advisory", json_encode($categories->articles));
        return view('a-propos')->with('title', $title)->with("articles", $categories->articles);
    }
}
