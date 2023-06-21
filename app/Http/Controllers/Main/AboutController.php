<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Post;
use Illuminate\Http\Request;

class AboutController extends BaseController
{
    public function __invoke()
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $posts = Post::all()->where('inside_link',null)->shuffle();
        $chunkPosts = round($posts->count()/3);
        $answers = Answer::all();

        return view("main.about",compact('role', 'user','posts','chunkPosts', 'answers'));
    }
}
