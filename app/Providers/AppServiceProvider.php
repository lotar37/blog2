<?php

namespace App\Providers;


use App\Models\SchoolClass;
use Illuminate\Pagination\Paginator;
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
//        $class_db = SchoolClass::all()->sortBy("name");
        Schema::defaultStringLength(191);
        View::share('version', 2.5);
//        View::share('curent_route', Route::getCurrentRoute()->getName());

        View::share('class_db', SchoolClass::all()->sortBy("sort_index"));
        View::share('visit_counts', \App\Models\View::all()->count());
        View::share('school_year', '2024-25');
        \view()->share('sys_user',function (){
            return is_null(auth()->user()) ? "" : auth()->user()->name;
        });
        \view()->share('sys_role',function (){
            return is_null(auth()->user()) ? 4 : auth()->user()->role;
        });
        Paginator::defaultView('vendor.pagination.bootstrap-4');

    }
}
