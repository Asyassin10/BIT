<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redis;



class JoinUsController extends Controller
{
    public function index(){
        /* $title = "Nous rejoindre - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('join-us')->with('title',$title)->with('articles',$categories->articles); */
        $redis_data = json_decode( Redis::get("Nous_rejoindre_BTI_Advisory"));
        $title = "Nous rejoindre - BTI - Advisory";
        if($redis_data){
            //return "hhhh";

            return view('join-us')->with('title', $title)->with("articles",$redis_data);
        }else{
            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("Nous_rejoindre_BTI_Advisory", json_encode($categories->articles));
            return view('join-us')->with('title', $title)->with("articles",$categories->articles);
        }
    }
}
