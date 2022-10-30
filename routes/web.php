<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['namespace' => "Main"], function () {
    Route::get("/", "IndexController")->name('main.index');
    Route::get("/contacts", "ContactsController")->name('main.contacts');
    Route::get("/reports", "ReportsController")->name('main.reports');
    Route::get("/about", "AboutController")->name('main.about');
    Route::get("/preschool", "PreschoolController")->name('main.preschool');
    Route::get("/extcurr", "ExtcurrController")->name('main.extcurr');
    Route::get("/studyplan", "StudyplanController")->name('main.studyplan');
    Route::get("/regim", "RegimController")->name('main.regim');
    Route::get("/teachers", "TeachersController")->name('main.teachers');
    Route::get("/patriarh", "PatriarhController")->name('main.patriarh');
    Route::get("/advice", "AdviceController")->name('main.advice');
    Route::get("/museum", "MuseumController")->name('main.museum');
    Route::get("/theaters", "TheatersController")->name('main.theaters');
    Route::get("/post/{post}", "PostShowController")->name('main.post_show');
});


Route::group(['namespace' => 'Personal', 'prefix' => 'personal', 'middleware' => [ 'auth', 'verified']], function () {
    Route::group(['namespace' => "Main", 'prefix' => 'main'], function () {
        Route::get("/", "IndexController")->name('personal.main.index');
    });
    Route::group(['namespace' => "Liked", 'prefix' => 'liked'], function () {
        Route::get("/", "IndexController")->name('personal.liked.index');
        Route::delete("/{post}", "DeleteController")->name('personal.liked.delete');
    });
    Route::group(['namespace' => "Comment", 'prefix' => 'comment'], function () {
        Route::get("/", "IndexController")->name('personal.comment.index');
        Route::get("/{comment}/edit", "EditController")->name('personal.comment.edit');
        Route::patch("/{comment}", "UpdateController")->name('personal.comment.update');
        Route::delete("/{comment}", "DeleteController")->name('personal.comment.delete');
    });
});
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => [ 'auth', 'admin']], function () {
    Route::group(['namespace' => "Main"], function () {
        Route::get("/", "IndexController")->name('admin.main.index');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
        Route::get("/", "IndexController")->name("admin.category.index");
        Route::get("/create", "CreateController")->name("admin.category.create");
        Route::post("/", "StoreController")->name("admin.category.store");
        Route::get("/{category}", "ShowController")->name("admin.category.show");
        Route::get("/{category}/edit", "EditController")->name("admin.category.edit");
        Route::patch("/{category}", "UpdateController")->name("admin.category.update");
        Route::delete("/{category}", "DeleteController")->name("admin.category.delete");
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function(){
        Route::get("/", "IndexController")->name("admin.tag.index");
        Route::get("/create", "CreateController")->name("admin.tag.create");
        Route::post("/", "StoreController")->name("admin.tag.store");
        Route::get("/{tag}", "ShowController")->name("admin.tag.show");
        Route::get("/{tag}/edit", "EditController")->name("admin.tag.edit");
        Route::patch("/{tag}", "UpdateController")->name("admin.tag.update");
        Route::delete("/{tag}", "DeleteController")->name("admin.tag.delete");
    });
    Route::group(['namespace' => 'Report', 'prefix' => 'reports'], function(){
        Route::get("/", "IndexController")->name("admin.report.index");
        Route::get("/create", "CreateController")->name("admin.report.create");
        Route::post("/", "StoreController")->name("admin.report.store");
        Route::get("/{report}", "ShowController")->name("admin.report.show");
        Route::get("/{report}/edit", "EditController")->name("admin.report.edit");
        Route::patch("/{report}", "UpdateController")->name("admin.report.update");
        Route::delete("/{report}", "DeleteController")->name("admin.report.delete");
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function(){
        Route::get("/", "IndexController")->name("admin.post.index");
        Route::get("/create", "CreateController")->name("admin.post.create");
        Route::post("/", "StoreController")->name("admin.post.store");
        Route::get("/{post}", "ShowController")->name("admin.post.show");
        Route::get("/{post}/edit", "EditController")->name("admin.post.edit");
        Route::patch("/{post}", "UpdateController")->name("admin.post.update");
        Route::delete("/{post}", "DeleteController")->name("admin.post.delete");
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function(){
        Route::get("/", "IndexController")->name("admin.user.index");
        Route::get("/create", "CreateController")->name("admin.user.create");
        Route::post("/", "StoreController")->name("admin.user.store");
        Route::get("/{user}", "ShowController")->name("admin.user.show");
        Route::get("/{user}/edit", "EditController")->name("admin.user.edit");
        Route::patch("/{user}", "UpdateController")->name("admin.user.update");
        Route::delete("/{user}", "DeleteController")->name("admin.user.delete");
    });
});

Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
