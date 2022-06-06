<?php


use App\Http\Controllers\ServiceController;
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

Route::get('/form', function () {
    return view('form');
});
Route::get('/single', function () {
    return view('single');
});





Route::prefix("/admin")->group(function(){
    Route::get('/',[IndexController::class, 'displayAdminPanel']);
    Route::get('/services',[ServiceController::class, 'displayAdminServices']);
    Route::get('/services/create',[ServiceController::class, 'displayCreateService']);
    Route::post('/services/create',[ServiceController::class, 'createService']);



    Route::prefix("/services")->group(function(){
        Route::get('/',[ServiceController::class, 'displayAllServices']);
        Route::get('/{id}',[ServiceController::class, 'getService']);
//        Route::get('/create',[ServiceController::class, 'displayCreateService']);

//        Route::post('/create',[ServiceController::class, 'createService']);
        Route::put('/{id}',[ServiceController::class, 'updateServices']);
        Route::delete('/{id}',[ServiceController::class, 'deleteServices']);
    });

});


