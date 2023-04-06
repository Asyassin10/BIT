<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function Home(){
        return view("admin.pages.Home");
    }
    public function update_articles()
    {
        $categorys = Category::all();
        $first_article = Article::first();
        $text_html = '<div class="elementor-element elementor-element-3dfbbae elementor-widget elementor-widget-heading"
                                                data-id="3dfbbae" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.8.1 - 13-11-2022 */
                                                        .elementor-heading-title {
                                                            padding: 0;
                                                            margin: 0;
                                                            line-height: 1
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                            color: inherit;
                                                            font-size: inherit;
                                                            line-height: inherit
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                            font-size: 15px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                            font-size: 19px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                            font-size: 29px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                            font-size: 39px
                                                        }

                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                            font-size: 59px
                                                        }
                                                    </style>
                                                    <h6 class="elementor-heading-title elementor-size-default">Nos services
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5c92fdb elementor-widget elementor-widget-heading"
                                                data-id="5c92fdb" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Nous nous
                                                        engageons dans une démarche de transformation et
                                                        d’innovation technologique au service du bien commun. </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-06adfcc elementor-align-left elementor-widget elementor-widget-button"
                                                data-id="06adfcc" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper icon_align_right  ">
                                                        <a href="index.html#services-acc"
                                                            class="elementor-button-link elementor-button elementor-size-xs"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-icon elementor-align-icon-right">
                                                                    <i aria-hidden="true" class="fas fa-arrow-down"></i>
                                                                </span>
                                                                <span class="elementor-button-text">Voir les
                                                                    services</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>';
        $oneLineString = str_replace(array("\r", "\n", "\t"), '', $first_article->article_text);
        $oneLineString = preg_replace('/\s+/', ' ', $oneLineString);

        //$dddddd = preg_replace('/\s+/', ' ', $text_html);
        /* $oneline_html = preg_replace('/\s+/', ' ', $text_html);
        $escaped_html = htmlspecialchars($oneline_html, ENT_HTML5, 'UTF-8'); */

        //$escaped_html = preg_replace('/\s+/', ' ', $text_html);
        //$escaped_html = htmlspecialchars($oneline_html, ENT_HTML5, 'UTF-8');

        //return $no_spaces;
        //return "".$oneLineString."";
        //echo $oneLineString;
        //return response()->json(["oneLineString"=>$dddddd]);
        /* $escaped_html = htmlspecialchars($text_html);
        $json_html = json_encode($escaped_html); */
        /* $escaped_html = htmlspecialchars($text_html);
        $json_html = str_replace("'", "\'", $escaped_html); */


        return view("admin.pages.Category.update_articles")->with("categorys", $categorys)->with("text_html",$oneLineString);
    }

    public function allCategories()
    {
        $all_categories = Category::all();
        return view("admin.pages.Category.allCategories")->with("all_categories", $all_categories);
    }
    public function CreateCategory()
    {
        return view("admin.pages.Category.CreateCategory");
    }
    public function CreateCategoryPost(Request $request)
    {
        $request->validate([
            "category_name" => "required|string"
        ]);
        Category::create([
            "categorie_name" => $request->category_name,
        ]);
        return redirect()->route("allCategories");
    }
    public function UpdateCategory(int $category_id)
    {
        $category = Category::find($category_id);
        //return $category->referenceCategory;
        return view("admin.pages.Category.UpdateCategory")->with("category", $category);
    }
    public function UpdateCategoryPost(Request $request, int $category_id)
    {
        $request->validate([
            "category_name" => "required|string"
        ]);
        $category = Category::find($category_id);
        $category->categorie_name = $request->category_name;
        $category->save();
        return redirect()->route("allCategories");
    }
}
