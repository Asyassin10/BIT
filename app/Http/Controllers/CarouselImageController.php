<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarouselImage;
use App\Services\FileServices;

class CarouselImageController extends Controller
{
    //
    public function GetCarouselImages()
    {
        $inages = CarouselImage::all();
        return view("admin.pages.InagesCarousel.GetInagesCarousel")->with("inages", $inages);
    }

    public function UploadImageCarouselPost(Request $request)
    {
        $request->validate([
            "cr_carousel_title" => "required|max:255",
            "cr_carousel_desc" => "required|max:255",
            "cr_carousel_footer" => "required|max:255",
            "cr_carousel_image_background" => "required",
            "cr_carousel_image_logo_fullname" => "required",
        ]);
        $img_blog_img = "ddd";
        if ($request->has('cr_carousel_image_background')) {
            //return $request;
            $img_blog_img = FileServices::UploadFileToPublicPath($request->file('cr_carousel_image_background'), 'images/home');
            $cr_carousel_image_logo_fullname_img_full_path = FileServices::UploadFileToPublicPath($request->file('cr_carousel_image_logo_fullname'), 'images/home');
            CarouselImage::create([
                "carousel_image_full_name" => $img_blog_img,
                "carousel_title" => $request->cr_carousel_title,
                "carousel_desc" => $request->cr_carousel_desc,
                "carousel_footer" => $request->cr_carousel_footer,
                "carousel_footer_link" => "#",
                "carousel_image_logo_fullname_webp" => "dddd",
                "carousel_image_logo_fullname" => $cr_carousel_image_logo_fullname_img_full_path,
            ]);
            return redirect()->back()->with("success", "sss");
        }
        return redirect()->back()->with("success", "sss");
    }
    public function UpdateUploadedImageCarouselPost(Request $request)
    {
        $request->validate([
            "cr_carousel_title_update" => "required|max:255",
            "cr_carousel_desc_update" => "required|max:255",
            "cr_carousel_footer_update" => "required|max:255",
            "cr_carousel_image_id" => "required",
            "cr_carousel_image_background_update" => "required",
            "cr_carousel_image_logo_fullname_update" => "required",
        ]);
        $CarouselImage = CarouselImage::find($request->cr_carousel_image_id);

        if ($request->has('cr_carousel_image_background_update')) {
            $carousel_image_carousel_image_full_name = public_path() . '/images/home/' . $CarouselImage->carousel_image_full_name;
            FileServices::DeleteFile($carousel_image_carousel_image_full_name);
            $carousel_image_full_name = FileServices::UploadFileToPublicPath($request->file('cr_carousel_image_background_update'), 'images/home');
            $CarouselImage->carousel_image_full_name = $carousel_image_full_name;
        }
        if ($request->has('cr_carousel_image_logo_fullname_update')) {
            $carousel_image_logo_fullname = public_path() . '/images/home/' . $CarouselImage->carousel_image_logo_fullname;
            FileServices::DeleteFile($carousel_image_logo_fullname);
            $logo_image_name = FileServices::UploadFileToPublicPath($request->file('cr_carousel_image_logo_fullname_update'), 'images/home');
            $CarouselImage->carousel_image_logo_fullname = $logo_image_name;
        }

        $CarouselImage->carousel_title = $request->cr_carousel_title_update;
        $CarouselImage->carousel_desc = $request->cr_carousel_desc_update;
        $CarouselImage->carousel_footer = $request->cr_carousel_footer_update;
        $CarouselImage->save();
        return redirect()->back()->with("success", "sss");
    }
    public function DeleteImageCarousel(int $carousel_image_id)
    {
        $CarouselImage = CarouselImage::find($carousel_image_id);
        $carousel_image_carousel_image_full_name = public_path() . '/images/home/' . $CarouselImage->carousel_image_full_name;
        $carousel_image_logo_fullname = public_path() . '/images/home/' . $CarouselImage->carousel_image_logo_fullname;

        FileServices::DeleteFile($carousel_image_carousel_image_full_name);
        FileServices::DeleteFile($carousel_image_logo_fullname);
        $CarouselImage->delete();
        return redirect()->back()->with("success", "sss");
    }
}
