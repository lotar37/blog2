<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostShowController extends Controller
{
    public function __invoke(Post $post)

    {
        if(is_null(auth()->user())){
            $role = 2;
            $user = "";
        }else{
            $role = auth()->user()->role;
            $user = auth()->user()->name;
        }
        $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        return view('main.post_show',compact("post",'role', 'user'));
    }
}
