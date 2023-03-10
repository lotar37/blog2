<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        if(is_null(auth()->user())){
            $role = 2;
            $user = "";
        }else{
            $role = auth()->user()->role;
            $user = auth()->user()->name;
        }
        $posts = Post::all()->sortDesc();
        foreach($posts as $post){
            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        }
        $posts3 = Post::all()->sortByDesc('date')->take(3);
        foreach($posts3 as $post){
            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        }
        $categories = Category::all();
//        dd($categories);
//dd($posts3);
        return view("main.index",compact('role', 'user','posts','posts3','categories'));
    }
}
