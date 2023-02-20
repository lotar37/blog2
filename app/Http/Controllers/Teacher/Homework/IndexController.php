<?php

namespace App\Http\Controllers\Teacher\Homework;

use App\Http\Controllers\Teacher\Homework\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $posts = Post::all();
        return view('teacher.homework.index',compact("posts"));
    }
}
