<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    //
    public function AllArticles(){
        $all_articles = Article::all();
        return view("admin.pages.Article.AllArticles")->with("all_articles", $all_articles);
    }
}
