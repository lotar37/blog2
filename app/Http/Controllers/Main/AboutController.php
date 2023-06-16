<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AboutController extends BaseController
{
    public function __invoke()
    {
//        if(is_null(auth()->user())){
//            $role = 2;
//            $user = "";
//        }else{
//            $role = auth()->user()->role;
//            $user = auth()->user()->name;
//        }
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $posts = Post::all();

        return view("main.about",compact('role', 'user','posts'));
    }
}
