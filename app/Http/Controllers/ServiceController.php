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
        $redis_data = json_decode( Redis::get("Nos_service_BTI_Advisory"));
        $title = "Nos service - BTI - Advisory";
        if($redis_data){
            //return "hhhh";

            return view('services.all-service')->with('title', $title)->with("articles",$redis_data);
        }else{
            return "hhhh";

            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("Nos_service_BTI_Advisory", json_encode($categories->articles));
            return view('services.all-service')->with('title', $title)->with("articles",$categories->articles);
        }
        //return $redis_data;
       // return $redis_data;
        //return json_encode($redis_data);
        //$data = json_decode($redis_data, true);
       //return $data;
        /* $data = $categories->articles;
        $json_data =  json_encode($data);
        return $data;
        Redis::set("Nos_service_BTI_Advisory", $json_data); */
    }

    public function show()
    {

        $title = "Technologie & Innovation - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('services.technologie-innovation')->with('title', $title)->with("articles",$categories->articles);
    }

    public function multi_speed_it()
    {
        $title = "Multi-Speed IT - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('services.multi-speed-it')->with('title', $title)->with("articles",$categories->articles);
    }

    public function transformation_produits_it()
    {
        $title = "Transformation des Produits IT - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('services.transformation-des-produits-it')->with('title', $title)->with("articles",$categories->articles);
    }

    public function transformation_ux()
    {
        $title = "Transformation UX - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('services.transformation-ux')->with('title', $title)->with("articles",$categories->articles);
    }
}
