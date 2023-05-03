<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminPermissionsController;
use App\Http\Controllers\Admin\AdminRolesController;
use App\Http\Controllers\Admin\AdminUserAuthorizationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\cgu;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoinUsController;
use App\Http\Controllers\LegalNotice;
use App\Http\Controllers\ServiceController;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
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

Route::view("heek", "admin.layout.AdminLayout");
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
    })->name('admin.dashboard');
    //categories
    Route::get("all-categories", [AdminCategoryController::class, "allCategories"])->name("allCategories");
    Route::get("create-category", [AdminCategoryController::class, "CreateCategory"])->name("CreateCategory");
    Route::post("create-category-post", [AdminCategoryController::class, "CreateCategoryPost"])->name("CreateCategoryPost");
    Route::get("update-category/{category_id}", [AdminCategoryController::class, "UpdateCategory"])->name("UpdateCategory");
    Route::post("update-category-post/{category_id}", [AdminCategoryController::class, "UpdateCategoryPost"])->name("UpdateCategoryPost");
    //articles

    Route::get("all-articles/{category_id}", [AdminArticleController::class, "AllArticles"])->name("AllArticles");
    Route::get("add-article/{category_id}", [AdminArticleController::class, "AddArticle"])->name("AddArticle");
    Route::post("add-articlePost/{category_id}", [AdminArticleController::class, "AddArticlePost"])->name("AddArticlePost");
    Route::get("update-articles/{article_id}", [AdminArticleController::class, "update_articles"])->name("update_articles");
    Route::post("update-articlesPost/{article_id}", [AdminArticleController::class, "update_articlesPost"])->name("update_articlesPost");
    Route::get("articles", [AdminArticleController::class, "ListArticles"])->name("ListArticles");
    //authorizations
    Route::prefix("roles")->group(function(){
        //users
        Route::get("get_all_users",[AdminUserAuthorizationController::class,"getAllUser"])->name("getAllUser");
        // -- roles
        Route::get("get_all_roles",[AdminRolesController::class,"GetAllRoles"])->name("GetAllRoles");
        Route::get("get_role_details/{role_id}",[AdminRolesController::class,"GetRoleDetails"])->name("GetRoleDetails");
        Route::get("assign_permission_to_role/{role_id}/{permission_id}",[AdminRolesController::class,"AssignPermissionToRole"])->name("AssignPermissionToRole");
        Route::get("un_assign_permission_to_role/{role_id}/{permission_id}",[AdminRolesController::class,"UnAssignPermissionToRole"])->name("UnAssignPermissionToRole");
        Route::post("save_role_permission_data/{role_id}",[AdminRolesController::class,"SaveRolePermissionData"])->name("SaveRolePermissionData");
        Route::get("create_role",[AdminRolesController::class,"CreateRole"])->name("CreateRole");
        Route::post("create_role_post",[AdminRolesController::class,"CreateRolePost"])->name("CreateRolePost");
        // -- permissions
        Route::get("get_all_permissions",[AdminPermissionsController::class,"GetAllPermissions"])->name("GetAllPermissions");
        Route::get("create_permission",[AdminPermissionsController::class,"CreatePermission"])->name("CreatePermission");
        Route::post("create_permission_post",[AdminPermissionsController::class,"CreatePermissionPost"])->name("CreatePermissionPost");
    });
});
Route::get('/admin/login', function () {
    /* $user = Auth::user();
    return $user; */
    return view('admin.login');
})->middleware("AuthNoLoginMiddleware");
Route::post('/admin/login/verify', [AdminController::class, 'admin_login']);
Route::post('/admin/logout', [AdminController::class, 'admin_logout'])->name('admin_logout');


Route::get("/cgu", [cgu::class, 'index'])->name('cgu');
Route::get("/mentions-legales", [LegalNotice::class, 'index'])->name('legal_notice');



Route::group(['middleware' => ['web', 'guest'], 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('connect', [AuthController::class, 'connect_office'])->name('connect');
});
Route::get('redirect/office', [AuthController::class, 'redirect'])->name('app');

Route::group(['middleware' => ['web', 'MsGraphAuthenticated'], 'prefix' => 'app', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('app', [AuthController::class, 'app'])->name('app');
    Route::post('logout/office', 'Auth\AuthController@logout_office')->name('logout_office');
});
