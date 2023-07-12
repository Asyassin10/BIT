<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselImage;
class CarouselImageController extends Controller
{
    //
    public function GetCarouselImages(){
        $inages = CarouselImage::all();
        return view("admin.pages.InagesCarousel.GetInagesCarousel")->with("inages",$inages);
    }
    public function UploadImageCarousel(Request $request){

    }
}
