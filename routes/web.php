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

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\UserInterfaceController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\PageLayoutController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\CarouselImageController;
use App\Http\Controllers\StudyCaseController;

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
    Route::get('/tous-nos-services', [ServiceController::class, 'tout_nos_services'])->name('tout_nos_services');
    Route::get('/construire-la-vision', [ServiceController::class, 'Construire_la_vision'])->name('Construire_la_vision');
    Route::get('/expérience-utilisateur', [ServiceController::class, 'expérience_utilisateur'])->name('expérience_utilisateur');
    Route::get('/accompagner-la-mise-en-oeuvre', [ServiceController::class, 'Accompagner_la_mise_en_oeuvre'])->name('Accompagner_la_mise_en_oeuvre');
    Route::get('/green-it', [ServiceController::class, 'green_it'])->name('green_it');
    Route::get('/data-inteligence', [ServiceController::class, 'data_inteligence'])->name('data_inteligence');
    Route::get('/cloud', [ServiceController::class, 'Cloud'])->name('Cloud');
    Route::get('/rebuilder', [ServiceController::class, 'rebuilder'])->name('rebuilder');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/a-propos', [AboutController::class, 'index'])->name('about-us');


Route::prefix('admin')->middleware(['admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard');
    })->name('admin.dashboard');
    // images
    Route::get("carousel-images", [CarouselImageController::class, "GetCarouselImages"])->name("GetCarouselImages");
    Route::post("carousel-upload-images", [CarouselImageController::class, "UploadImageCarouselPost"])->name("UploadImageCarouselPost");
    Route::get("carousel-delete-image/{carousel_image_id}", [CarouselImageController::class, "DeleteImageCarousel"])->name("DeleteImageCarousel");
    Route::post("carousel-update-image", [CarouselImageController::class, "UpdateUploadedImageCarouselPost"])->name("UpdateUploadedImageCarouselPost");

    //categories
    Route::get("all-categories", [AdminCategoryController::class, "allCategories"])->name("allCategories");
    Route::get("create-category", [AdminCategoryController::class, "CreateCategory"])->name("CreateCategory");
    Route::post("create-category-post", [AdminCategoryController::class, "CreateCategoryPost"])->name("CreateCategoryPost");
    Route::post("UpdatePermissionName/{permission_id}", [AdminPermissionsController::class, "UpdatePermissionName"])->name("UpdatePermissionName");
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
    Route::prefix("roles")->group(function () {
        //users
        Route::get("get_all_users", [AdminUserAuthorizationController::class, "getAllUser"])->name("getAllUser");
        // -- roles
        Route::get("get_all_roles", [AdminRolesController::class, "GetAllRoles"])->name("GetAllRoles");
        Route::get("get_role_details/{role_id}", [AdminRolesController::class, "GetRoleDetails"])->name("GetRoleDetails");
        Route::get("assign_permission_to_role/{role_id}/{permission_id}", [AdminRolesController::class, "AssignPermissionToRole"])->name("AssignPermissionToRole");
        Route::get("un_assign_permission_to_role/{role_id}/{permission_id}", [AdminRolesController::class, "UnAssignPermissionToRole"])->name("UnAssignPermissionToRole");
        Route::post("save_role_permission_data/{role_id}", [AdminRolesController::class, "SaveRolePermissionData"])->name("SaveRolePermissionData");
        Route::get("create_role", [AdminRolesController::class, "CreateRole"])->name("CreateRole");
        Route::post("create_role_post", [AdminRolesController::class, "CreateRolePost"])->name("CreateRolePost");
        // -- permissions
        Route::get("get_all_permissions", [AdminPermissionsController::class, "GetAllPermissions"])->name("GetAllPermissions");
        Route::get("create_permission", [AdminPermissionsController::class, "CreatePermission"])->name("CreatePermission");
        Route::post("create_permission_post", [AdminPermissionsController::class, "CreatePermissionPost"])->name("CreatePermissionPost");
    });



    Route::get('dashboard', [DashboardController::class, 'dashboardAnalytics'])->name('admin.dashboard');
    /* Route Dashboards */
    Route::get("/RemovePermissionFromRole/{role_id}/{permission_id}", [AdminRolesController::class, "RemovePermissionFromRole"])->name("RemovePermissionFromRole");
    Route::get("/AssignPermissionFromRole/{role_id}/{permission_id}", [AdminRolesController::class, "AssignPermissionFromRole"])->name("AssignPermissionFromRole");
    Route::get("/RemoveUserFromRole/{role_id}/{user_id}", [AdminRolesController::class, "RemoveUserFromRole"])->name("RemoveUserFromRole");
    Route::get("/AddUserAccessToRole/{role_id}/{user_id}", [AdminRolesController::class, "AddUserAccessToRole"])->name("AddUserAccessToRole");
    Route::get("/AssignUserToPermission/{permission_id}/{user_id}", [AppsController::class, "AssignUserToPermission"])->name("AssignUserToPermission");
    Route::get("/DeleteUserToPermission/{permission_id}/{user_id}", [AppsController::class, "DeleteUserToPermission"])->name("DeleteUserToPermission");
    Route::get('access-roles', [AdminRolesController::class, 'GetAllRoles'])->name('app-access-roles');
    Route::post('UpdatesRolePermisssions/{role_id}', [AdminRolesController::class, 'UpdatesRolePermisssions'])->name('UpdatesRolePermisssions');
    Route::get('access-permission', [AppsController::class, 'access_permission'])->name('app-access-permission');
    Route::get('user/list', [AppsController::class, 'user_list'])->name('app-user-list');
    Route::post('user/create', [AppsController::class, 'CreateUser'])->name('app-user-create');
    Route::get('user/view/account', [AppsController::class, 'user_view_account'])->name('app-user-view-account');
    Route::get('user/view/security', [AppsController::class, 'user_view_security'])->name('app-user-view-security');
    Route::get('user/view/billing', [AppsController::class, 'user_view_billing'])->name('app-user-view-billing');
    Route::get('user/view/notifications', [AppsController::class, 'user_view_notifications'])->name('app-user-view-notifications');
    Route::get('user/view/connections', [AppsController::class, 'user_view_connections'])->name('app-user-view-connections');



    Route::get('account-settings-account', [PagesController::class, 'account_settings_account'])->name('page-account-settings-account');
    Route::get('account-settings-security', [PagesController::class, 'account_settings_security'])->name('page-account-settings-security');
    Route::get('account-settings-billing', [PagesController::class, 'account_settings_billing'])->name('page-account-settings-billing');
    Route::get('account-settings-notifications', [PagesController::class, 'account_settings_notifications'])->name('page-account-settings-notifications');
    Route::get('account-settings-connections', [PagesController::class, 'account_settings_connections'])->name('page-account-settings-connections');
    Route::get('profile', [PagesController::class, 'profile'])->name('page-profile');
    Route::get('faq', [PagesController::class, 'faq'])->name('page-faq');
    Route::get('knowledge-base', [PagesController::class, 'knowledge_base'])->name('page-knowledge-base');
    Route::get('knowledge-base/category', [PagesController::class, 'kb_category'])->name('page-knowledge-base');
    Route::get('knowledge-base/category/question', [PagesController::class, 'kb_question'])->name('page-knowledge-base');
    Route::get('pricing', [PagesController::class, 'pricing'])->name('page-pricing');
    Route::get('api-key', [PagesController::class, 'api_key'])->name('page-api-key');
});
Route::get('/admin/login', function () {
    return view('admin.login');
})->middleware("AuthNoLoginMiddleware");
Route::post('/admin/login/verify', [AdminController::class, 'admin_login']);
Route::post('/admin/logout', [AdminController::class, 'admin_logout'])->name('admin_logout');


Route::get("/cgu", [cgu::class, 'index'])->name('cgu');


Route::get("/mentions-legales", function () {
    return view("mentions-legales");
})->name('legal_notice');



Route::group(['middleware' => ['web', 'guest'], 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('connect', [AuthController::class, 'connect_office'])->name('connect');
});
Route::get('redirect/office', [AuthController::class, 'redirect'])->name('app');

Route::group(['middleware' => ['web', 'MsGraphAuthenticated'], 'prefix' => 'app', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('app', [AuthController::class, 'app'])->name('app');
    Route::post('logout/office', 'Auth\AuthController@logout_office')->name('logout_office');
});
Route::get("study_cases/index",[StudyCaseController::class,"index"])->name("index");
Route::get("study_cases/total_marketing_france",[StudyCaseController::class,"total_marketing_france"])->name("total_marketing_france");
Route::get("study_cases/rousselet",[StudyCaseController::class,"rousselet"])->name("rousselet");
Route::get("study_cases/disneyland-paris",[StudyCaseController::class,"disneyland_paris"])->name("disneyland_paris");
Route::get("study_cases/elior-group",[StudyCaseController::class,"elior_group"])->name("elior_group");
Route::get("study_cases/servier",[StudyCaseController::class,"servier"])->name("servier");
Route::get("study_cases/enedis",[StudyCaseController::class,"enedis"])->name("enedis");
Route::get("study_cases/randstad",[StudyCaseController::class,"randstad"])->name("randstad");
Route::get("study_cases/médiamétrie",[StudyCaseController::class,"Médiamétrie"])->name("Médiamétrie");
Route::get("study_cases/docaposte",[StudyCaseController::class,"docaposte"])->name("docaposte");
Route::get("study_cases/ouisncf",[StudyCaseController::class,"ouisncf"])->name("ouisncf");






