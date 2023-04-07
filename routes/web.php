<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoinUsController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/nous-rejoindre', [JoinUsController::class, 'index'])->name('join-us');

//services
Route::get('/nos-services', [ServiceController::class, 'index'])->name('services');

Route::prefix('service')->group(function () {
    Route::get('/technologie-innovation', [ServiceController::class, 'show'])->name('technologie-innovation.service');
    Route::get('/multi-speed-it', [ServiceController::class, 'multi_speed_it'])->name('multi_speed_it.service');
    Route::get('/transformation-des-produits-it', [ServiceController::class, 'transformation_produits_it'])->name('transformation-des-produits-it.service');
    Route::get('/transformation-ux', [ServiceController::class, 'transformation_ux'])->name('transformation-ux.service');
});

Route::view("heek","admin.layout.AdminLayout");
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/a-propos', [AboutController::class, 'index'])->name('about-us');




/* Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); */


Route::prefix('admin')->middleware(['admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard');
    });
    //categories
    Route::get("all_categories", [AdminCategoryController::class, "allCategories"])->name("allCategories");
    Route::get("create_category", [AdminCategoryController::class, "CreateCategory"])->name("CreateCategory");
    Route::post("create_category_post", [AdminCategoryController::class, "CreateCategoryPost"])->name("CreateCategoryPost");
    Route::get("update_category/{category_id}", [AdminCategoryController::class, "UpdateCategory"])->name("UpdateCategory");
    Route::post("update_category_post/{category_id}", [AdminCategoryController::class, "UpdateCategoryPost"])->name("UpdateCategoryPost");
    //articles

    Route::get("AllArticles/{category_id}", [AdminArticleController::class, "AllArticles"])->name("AllArticles");
    Route::get("update_articles/{article_id}", [AdminArticleController::class, "update_articles"])->name("update_articles");
    Route::post("update_articlesPost", [AdminArticleController::class, "update_articlesPost"])->name("update_articlesPost");
});
Route::get('/admin/login', function () {
    /* $user = Auth::user();
    return $user; */
    return view('admin.login');
});
Route::post('/admin/login/verify', [AdminController::class, 'admin_login']);
Route::post('/admin/logout', [AdminController::class, 'admin_logout'])->name('admin_logout');
