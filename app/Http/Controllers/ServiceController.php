<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class ServiceController extends Controller
{
    public function tout_nos_services()
    {
        return view('service.tout_nos_services');
    }
    public function Construire_la_vision()
    {
        return view('service.construire_la_vision');
    }
    public function data_inteligence()
    {
        return view('service.data_inteligence');
    }
    public function green_it()
    {
        return view('service.green_it');
    }
    public function expérience_utilisateur()
    {
        return view('service.expérience_utilisateur');
    }
    public function Accompagner_la_mise_en_oeuvre()
    {
        return view('service.accompagner_la_mise_en_oeuvre');
    }

    public function Cloud()
    {
        return view('service.cloud');
    }
    public function index()
    {
        /* $title = "Nos service - BTI - Advisory";
        $categories = Category::where("url_presentation",$title)->first();
        return view('services.all-service')->with('title', $title)->with("articles",$categories->articles); */
        //$redis_data = json_decode( Redis::get("Nos_service_BTI_Advisory"));
        $title = "Nos service - BTI - Advisory";
        /* if($redis_data){
            //return "hhhh";

            return view('services.all-service')->with('title', $title)->with("articles",$redis_data);
        }else{

            $categories = Category::where("url_presentation",$title)->first();
            Redis::set("Nos_service_BTI_Advisory", json_encode($categories->articles));
            return view('services.all-service')->with('title', $title)->with("articles",$categories->articles);
        } */
        $categories = Category::where("url_presentation", $title)->first();
        Redis::set("Nos_service_BTI_Advisory", json_encode($categories->articles));
        return view('services.all-service')->with('title', $title)->with("articles", $categories->articles);
    }
}
