<?php


use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'displayHomePage']);
Route::get('/blog', [IndexController::class, 'displayBlogPage']);
Route::get('/shop', [IndexController::class, 'displayshopPage']);

Route::get('/form', function () {
    return view('form');
});
Route::get('/single', function () {
    return view('single');
});

Route::get('/admin/login', function () {
    return view('/admin/login');
});





Route::middleware("auth")->prefix("/admin")->group(function(){
    Route::get('/', [IndexController::class, 'displayAdminPanel']);

    Route::get('/addblog', [BlogController::class, 'displayaddblogPage']);


//    Route::get('/services',[ServiceController::class, 'displayAdminServices']);
    Route::get('/services',[ServiceController::class, 'displayAllServices']);

    Route::get('/services/create',[ServiceController::class, 'displayCreateService']);
    Route::post('/services/create',[ServiceController::class, 'createService']);

    Route::delete('/services/{service}',[ServiceController::class, 'deleteService']);

    Route::get('/services/edit/{service}',[ServiceController::class, 'displayUpdateService']);
    Route::put('/services/{service}',[ServiceController::class, 'updateService']);

/////////////////////shop////////////////////////

    Route::get('/shop',[ShopController::class, 'displayAllShop']);

    Route::get('/shop/create',[shopController::class, 'displayCreateshop']);
    Route::post('/shop/create',[shopController::class, 'createshop']);

    Route::delete('/shop/{shop}',[shopController::class, 'deleteShop']);

    Route::get('/shop/edit/{shop}',[shopController::class, 'displayUpdateShop']);
    Route::put('/shop/{shop}',[shopController::class, 'updateShop']);



//    Route::prefix("/services")->group(function(){
//
//        Route::get('/{id}',[ServiceController::class, 'getService']);
//        Route::get('/create',[ServiceController::class, 'displayCreateService']);

//        Route::post('/create',[ServiceController::class, 'createService']);
//        Route::put('/{id}',[ServiceController::class, 'updateServices']);
//        Route::delete('/{id}',[ServiceController::class, 'deleteServices']);
//    });

});
Route::resource("article",ArticleController::class);

//Route::resource("blog",BlogController::class);


/////////////////////auth////////////////////////
Route::get("/login",[AuthController::class,"loginForm"])->name("login");
Route::post("/login",[AuthController::class,"login"]);
Route::get("/signup",[AuthController::class,"signupForm"])->name("signup");
Route::post("/signup",[AuthController::class,"signup"]);
Route::get("/logout",[AuthController::class,"logout"]);




