<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isNull;

class AdminArticleController extends Controller
{
    //
    public function AllArticles(int $category_id ){

        $all_articles = Article::where("categorie_id",$category_id)->get();
        return view("admin.pages.Article.AllArticles")->with("all_articles", $all_articles);
    }
    public function ListArticles(){

        $all_articles = Article::orderBy('article_id', 'desc')->get();
        return view("admin.pages.Article.AllArticles")->with("all_articles", $all_articles);
    }
     public function update_articles(int $article_id)
    {
        $categorys = Category::all();
        $first_article = Article::find($article_id);
        $oneLineString = str_replace(array("\r", "\n", "\t"), '', $first_article->article_text);
        $oneLineString = preg_replace('/\s+/', ' ', $oneLineString);
        return view("admin.pages.Category.update_articles")->with("categorys", $categorys)->with("text_html",$oneLineString);
    }

    public function update_articlesPost(Request $request){
        //$html = '<html><body><h1>Hello, world!</h1><p>This is some text.</p></body></html>';

        $text = preg_replace('#<[^>]+>#', ' ', $request->data_content_html);
        $text = trim(preg_replace('/\s+/', ' ', $text));

        //echo $text;
        $words = explode(' ', $text);
        $first_three_words = array_slice($words, 0, 3);
        $slug = implode(' ', $first_three_words);

        $first_article = Article::first();
        $first_article->article_text = $request->data_content_html;
        $first_article->article_slug = $slug;
        $first_article->save();
        //return response()->json(["bb"=>$request->data_content_html]);
        return redirect()->route("AllArticles",["category_id"=>$first_article->categorie_id]);
    }
}
