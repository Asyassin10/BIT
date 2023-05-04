<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class ServiceController extends Controller
{
    public function index()
    {
        /* $title = "Nos service - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('services.all-service')->with('title', $title)->with("articles",$categories->articles); */
        $redis_data = json_decode( Redis::get("Nos_service_BTI_Advisory"));
        $title = "Nos service - BTI - Advisory";
        if($redis_data){
            //return "hhhh";

            return view('services.all-service')->with('title', $title)->with("articles",$redis_data);
        }else{

            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("Nos_service_BTI_Advisory", json_encode($categories->articles));
            return view('services.all-service')->with('title', $title)->with("articles",$categories->articles);
        }
    }

    public function show()
    {

        /* $title = "Technologie & Innovation - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('services.technologie-innovation')->with('title', $title)->with("articles",$categories->articles); */
        $redis_data = json_decode( Redis::get("Technologie_Innovation_BTI_Advisory"));
        $title = "Technologie & Innovation - BTI - Advisory";
        if($redis_data){
            //return "hhhh";

            return view('services.technologie-innovation')->with('title', $title)->with("articles",$redis_data);
        }else{
            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("Technologie_Innovation_BTI_Advisory", json_encode($categories->articles));
            return view('services.technologie-innovation')->with('title', $title)->with("articles",$categories->articles);
        }
    }

    public function multi_speed_it()
    {
        /* $title = "Multi-Speed IT - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('services.multi-speed-it')->with('title', $title)->with("articles",$categories->articles); */
        $redis_data = json_decode( Redis::get("Multi_Speed_IT_BTI_Advisory"));
        $title = "Multi-Speed IT - BTI - Advisory";
        if($redis_data){
            //return "hhhh";

            return view('services.multi-speed-it')->with('title', $title)->with("articles",$redis_data);
        }else{
            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("Multi_Speed_IT_BTI_Advisory", json_encode($categories->articles));
            return view('services.multi-speed-it')->with('title', $title)->with("articles",$categories->articles);
        }
    }

    public function transformation_produits_it()
    {
        /* $title = "Transformation des Produits IT - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('services.transformation-des-produits-it')->with('title', $title)->with("articles",$categories->articles); */
        $redis_data = json_decode( Redis::get("Transformation_des_Produits_IT_BTI_Advisory"));
        $title = "Transformation des Produits IT - BTI - Advisory";
        if($redis_data){

            return view('services.transformation-des-produits-it')->with('title', $title)->with("articles",$redis_data);
        }else{
            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("Transformation_des_Produits_IT_BTI_Advisory", json_encode($categories->articles));
            return view('services.transformation-des-produits-it')->with('title', $title)->with("articles",$categories->articles);
        }
    }

    public function transformation_ux()
    {
        /* $title = "Transformation UX - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('services.transformation-ux')->with('title', $title)->with("articles",$categories->articles); */
        $redis_data = json_decode( Redis::get("Transformation_UX_BTI_Advisory"));
        $title = "Transformation UX - BTI - Advisory";
        if($redis_data){
            //return "hhhh";

            return view('services.transformation-ux')->with('title', $title)->with("articles",$redis_data);
        }else{
            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("Transformation_UX_BTI_Advisory", json_encode($categories->articles));
            return view('services.transformation-ux')->with('title', $title)->with("articles",$categories->articles);
        }
    }
}
