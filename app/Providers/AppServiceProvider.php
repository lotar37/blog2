<?php

namespace App\Providers;


use App\Models\SchoolClass;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $user = is_null(auth()->user()) ? " noll" : auth()->user()->name;
        View::share('user_name', $user);
        $class_db = SchoolClass::all();
        Schema::defaultStringLength(191);
        View::share('version', 2);
//        View::share('curent_route', Route::getCurrentRoute()->getName());

        View::share('class_db', SchoolClass::all());
        \view()->share('uuu',function (){
            return is_null(auth()->user()) ? " noll" : auth()->user()->name;
        });


    }
}
