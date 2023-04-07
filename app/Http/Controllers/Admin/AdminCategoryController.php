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


    public function allCategories()
    {
        $all_categories = Category::all();
        //return $all_categories;
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
