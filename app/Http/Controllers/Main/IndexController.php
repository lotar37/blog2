<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
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
        return view("main.index",compact('role', 'user','posts'));
    }
}
