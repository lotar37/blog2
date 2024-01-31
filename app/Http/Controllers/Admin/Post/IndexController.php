<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends BaseController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $posts = Post::all()->sortDesc();

        $posts = Post::orderByDesc('id')->paginate(10);
        return view('admin.posts.index',compact("posts"));
    }
}
