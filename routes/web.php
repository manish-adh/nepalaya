<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\admin\AdminController;

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
// old method
// Route::get('/','app\Http\Controllers\PagesController@home');
// Route::get('/user', 'PagesController@users');
//Route::get("/home",[PagesController::class,'home']);




Route::get("/",[PagesController::class,'index']);

Route::get("/index",[PagesController::class,'index']);
Route::get("/users",[PagesController::class,'users'])->middleware('auth');

Route::get("/singlepage/{id}",[SingleController::class,'show'])->name('single-product')->middleware('auth');

Route::get("/categories",[PagesController::class,'categories']);


Route::get("/upload",[UploadController::class,'upload']);
Route::get("/myupload",[UploadController::class,'shows']);
Route::get("/newupload",[UploadController::class,'newupload'])->middleware('auth');
Route::post("/uploadpost",[UploadController::class,'uploadpost'])->middleware('auth');
Route::get("editpost/{id}",[UploadController::class,'edit']);
Route::POST("edit",[UploadController::class,'update']);
Route::get("deletepost/{id}",[UploadController::class,'delete']);



Route::get("/category",[CategoryController::class,'category']);
Route::get("/category_page",[CategoryController::class,'category_page']);


Route::get("/about",[PagesController::class,'about']);


// Route::get("/",[PagesController::class,'welcome']);

Route::post("/commentpost",[CommentController::class,'commentpost'])->middleware('auth');
Route::post("/likepage",[LikeController::class,'likeupdate'])->middleware('auth');
Route::get("/like-page",[LikeController::class,'like'])->middleware('auth');


// Route::resource('post', PostsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/search",[SearchController::class,'search']);


// for admin
 
Route::group(['middleware'=>['auth','admin']],function(){

    Route::get("/dashboard",[AdminController::class,'admin']);
    Route::get("/users",[AdminController::class,'users']);
    Route::get("/adminpost",[AdminController::class,'post_admin']);
    Route::get("deletepostadmin/{id}",[AdminController::class,'delete']);
   

});
