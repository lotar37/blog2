<?php

use App\Http\Controllers\Main\DocsController;
use App\Http\Controllers\Main\ProjectsController;
use App\Http\Controllers\Main\SummerReadingController as SummerReading;
use App\Http\Controllers\Admin\SummerReading\SummerReadingController;
use App\Http\Controllers\Main\HomeworksController;
use App\Http\Controllers\Main\CirclesController;
use App\Http\Controllers\Main\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*t
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => "Main"], function () {
    Route::get("/", "IndexController")->name('main.index');
    Route::get("/contacts", "ContactsController")->name('main.contacts');
    Route::get("/reports", "ReportsController")->name('main.reports');
    Route::get("/post", "PostIndexController")->name('main.post');

    Route::get("/news/{path}", function ($path){
        return redirect('http://gymnasia-radonezh.ru/news/'.$path);
    });
    Route::get("/church/{path}", function ($path){
        return redirect('http://gymnasia-radonezh.ru/church/'.$path);
    });

    Route::get("/news", "PostIndexController")->name('main.post');


    Route::get("/post/{post}", "PostShowController")->name('main.post_show');


    Route::get("/about/{path}", function ($path){
        return redirect('http://gymnasia-radonezh.ru/about/'.$path);
    });
    Route::get("/about/{path1}/{path2}", function ($path1, $path2){
        return redirect('http://gymnasia-radonezh.ru/about/'.$path1."/".$path2);
    });


    Route::get("/about", "AboutController")->name('main.about');
    Route::get("/preschool", [PagesController::class,"preschool"])->name('main.preschool');
    Route::get("/gia", [PagesController::class,"gia"])->name('main.gia');
    Route::get("/projects", [PagesController::class,"projects"])->name('main.projects');
    Route::get("/docs", [DocsController::class,"index"])->name('main.docs');
    Route::get("/innovations", [PagesController::class,"innovations"])->name('main.innovations');
    Route::get("/letopis", [PagesController::class,"letopis"])->name('main.letopis');
    Route::get("/announcement", [PagesController::class,"announcement"])->name('main.announcement');
    Route::get("/extcurr", [PagesController::class,"extcurr"])->name('main.extcurr');
    Route::get("/studyplan", "StudyplanController")->name('main.studyplan');
    Route::get("/programs", "StudyplanController")->name('main.studyplan');
    Route::get("/regime", [PagesController::class,"regim"])->name('main.regim');
    Route::get("/persons", [PagesController::class,"teachers"])->name('main.teachers');
    Route::get("/teachers", [PagesController::class,"teachers"])->name('main.teachers');
    Route::get("/management", [PagesController::class,"management"])->name('main.management');
    Route::get("/patriarh", [PagesController::class,"patriarh"])->name('main.patriarh');
    Route::get("/advice", [PagesController::class,"advice"])->name('main.advice');
    Route::get("/recommendations", [PagesController::class,"advice"])->name('main.advice');
    Route::get("/admission", [PagesController::class,"admission"])->name('main.admission');
    Route::get("/requisites", [PagesController::class,"requisites"])->name('main.requisites');
    Route::get("/museum", [PagesController::class,"museum"])->name('main.museum');
    Route::get("/recommendations/r-exhibitions/", [PagesController::class,"museum"])->name('main.museum');
    Route::get("/theaters", [PagesController::class,"theaters"])->name('main.theaters');
    Route::get("/recommendations/r-theatres/", [PagesController::class,"theaters"])->name('main.theaters');
    Route::get("/khram_chtenie", [PagesController::class,"khram_chtenie"])->name('main.khram_chtenie');
    Route::get("/temple_schedule", [PagesController::class,"temple_schedule"])->name('main.temple_schedule');
    Route::get("/khram_history", [PagesController::class,"khram_history"])->name('main.khram_history');
    Route::get("/khram_docs", [PagesController::class,"khram_docs"])->name('main.khram_docs');
    Route::get("/circles", [CirclesController::class,"index"])->name('main.circles');
    Route::get("/circles/{circle}", [CirclesController::class,"show"])->name('main.circles.show');
    Route::get("/projects", [ProjectsController::class,"index"])->name('main.projects');
    Route::get("/projects/{project}", [ProjectsController::class,"show"])->name('main.projects.show');
    Route::get("/summer_reading", [SummerReading::class,"index"])->name('main.summer_reading.index');
    Route::get("/summer_reading/{schoolClass}", [SummerReading::class,"show"])->name('main.summer_reading.show');
    Route::get("/homework", [HomeworksController::class,"index"])->name('main.homework.index');
    Route::get("/homework/{subject}/{schoolClass}", [HomeworksController::class,"show"])->name('main.homework.show');
    Route::get("/homework/{schoolClass}", [HomeworksController::class,"showClassHomeworks"])->name('main.homework.showClass');
    Route::get("/{path}", function ($path){
        return redirect('http://gymnasia-radonezh.ru/'.$path);
    });

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


Route::group(['namespace' => 'Teacher', 'prefix' => 'teacher', 'middleware' => [ 'auth', 'teacher']], function () {
    Route::group(['namespace' => "Main"], function () {
        Route::get("/", "IndexController")->name('teacher.main.index');
    });
    Route::group(['namespace' => "Homework", 'prefix' => 'homeworks'], function () {
        Route::get("/{homework}/edit", "EditController")->name('teacher.homework.edit');
        Route::get("/{subject}/{school_class}", "IndexController")->name('teacher.homework.index');
        Route::get("/{subject}/{school_class}/create", "CreateController")->name('teacher.homework.create');
        Route::post("/", "StoreController")->name("teacher.homework.store");
        Route::patch("/{homework}", "UpdateController")->name("teacher.homework.update");
        Route::delete("/{homework}", "DeleteController")->name("teacher.homework.delete");
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
    Route::group(['namespace' => 'SummerReading', 'prefix' => 'summer_reading'], function(){
        Route::get("/{schoolClass}", [SummerReadingController::class,"edit"])->name('admin.summer_reading.edit');
        Route::patch("/{schoolClass}", [SummerReadingController::class,"update"])->name('admin.summer_reading.update');
    });

    Route::group(['namespace' => 'Subject', 'prefix' => 'subjects'], function(){
        Route::get("/", "IndexController")->name("admin.subject.index");
        Route::get("/create", "CreateController")->name("admin.subject.create");
        Route::post("/", "StoreController")->name("admin.subject.store");
        Route::get("/{subject}/edit", "EditController")->name("admin.subject.edit");
        Route::patch("/{subject}", "UpdateController")->name("admin.subject.update");
        Route::delete("/{subject}", "DeleteController")->name("admin.subject.delete");
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

    Route::group(['namespace' => 'Doc', 'prefix' => 'docs'], function(){
        Route::get("/", "IndexController")->name("admin.doc.index");
        Route::get("/create", "CreateController")->name("admin.doc.create");
        Route::post("/", "StoreController")->name("admin.doc.store");
        Route::get("/{doc}/edit", "EditController")->name("admin.doc.edit");
        Route::patch("/{doc}", "UpdateController")->name("admin.doc.update");
        Route::delete("/{doc}", "DeleteController")->name("admin.doc.delete");
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
    Route::group(['namespace' => 'Circle', 'prefix' => 'circles'], function(){
        Route::get("/", "IndexController")->name("admin.circle.index");
        Route::get("/create", "CreateController")->name("admin.circle.create");
        Route::post("/", "StoreController")->name("admin.circle.store");
        Route::get("/{circle}", "ShowController")->name("admin.circle.show");
        Route::get("/{circle}/edit", "EditController")->name("admin.circle.edit");
        Route::patch("/{circle}", "UpdateController")->name("admin.circle.update");
        Route::delete("/{circle}", "DeleteController")->name("admin.circle.delete");
    });
    Route::group(['namespace' => 'Project', 'prefix' => 'projects'], function(){
        Route::get("/", "IndexController")->name("admin.project.index");
        Route::get("/create", "CreateController")->name("admin.project.create");
        Route::post("/", "StoreController")->name("admin.project.store");
        Route::get("/{project}", "ShowController")->name("admin.project.show");
        Route::get("/{project}/edit", "EditController")->name("admin.project.edit");
        Route::patch("/{project}", "UpdateController")->name("admin.project.update");
        Route::delete("/{project}", "DeleteController")->name("admin.project.delete");
    });
    Route::group(['namespace' => 'Answer', 'prefix' => 'answers'], function(){
        Route::get("/", "IndexController")->name("admin.answer.index");
        Route::get("/create", "CreateController")->name("admin.answer.create");
        Route::post("/", "StoreController")->name("admin.answer.store");
        Route::get("/{answer}", "ShowController")->name("admin.answer.show");
        Route::get("/{answer}/edit", "EditController")->name("admin.answer.edit");
        Route::patch("/{answer}", "UpdateController")->name("admin.answer.update");
        Route::delete("/{answer}", "DeleteController")->name("admin.answer.delete");
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
    Route::group(['namespace' => 'UserSubjectClass', 'prefix' => 'usc'], function(){
        Route::get("/", "IndexController")->name("admin.userSubjectClass.index");
        Route::get("/create", "CreateController")->name("admin.userSubjectClass.create");
        Route::post("/", "StoreController")->name("admin.userSubjectClass.store");
        Route::get("/{post}", "ShowController")->name("admin.userSubjectClass.show");
        Route::get("/{user}/{subject}", "EditController")->name("admin.userSubjectClass.edit");
        Route::patch("/", "UpdateController")->name("admin.userSubjectClass.update");
        Route::delete("/{user}/{subject}", "DeleteController")->name("admin.userSubjectClass.delete");
    });
    Route::group(['namespace' => 'Page', 'prefix' => 'pages'], function(){
        Route::get("/", "IndexController")->name("admin.page.index");
        Route::get("/create", "CreateController")->name("admin.page.create");
        Route::post("/", "StoreController")->name("admin.page.store");
        Route::get("/{page}", "ShowController")->name("admin.page.show");
        Route::get("/{page}/edit", "EditController")->name("admin.page.edit");
        Route::patch("/{page}", "UpdateController")->name("admin.page.update");
        Route::delete("/{page}", "DeleteController")->name("admin.page.delete");
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
