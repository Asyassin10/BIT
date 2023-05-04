<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function index(){
        /* $title = "BTI - Advisory - Cabinet de conseil en IT";
        $categories = Category::where("url_presentation",$title)->first();
        return view('home')->with('title',$title)->with('articles',$categories->articles); */

        $redis_data = json_decode( Redis::get("BTI_Advisory_Cabinet_de_conseil_en_IT"));
        $title = "BTI - Advisory - Cabinet de conseil en IT";
        if($redis_data){
            //return "hhhh";

            return view('home')->with('title', $title)->with("articles",$redis_data);
        }else{
            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("BTI_Advisory_Cabinet_de_conseil_en_IT", json_encode($categories->articles));
            return view('home')->with('title', $title)->with("articles",$categories->articles);
        }
    }
}
