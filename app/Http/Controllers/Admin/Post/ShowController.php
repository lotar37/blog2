<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.
        $starttime = microtime(true);
        $posts = Post::randomPosts(4);
        $posts2 = Post::randomPosts(10);
        $endtime = microtime(true);
        $timediff1 = $endtime - $starttime;
        $starttime = microtime(true);
        $posts = Post::all()->where('inside_link',null)->sortByDesc('date')->take(9);
        $endtime = microtime(true);
        $timediff2 = $endtime - $starttime;


        //dd($posts, $timediff1, $timediff2,123);
        return view('admin.posts.show',compact("post","posts"));
    }
}
