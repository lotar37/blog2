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
        $endtime = microtime(true);
        $timediff = $endtime - $starttime;
        dd($posts, $timediff);
        return view('admin.post.show',compact("post","posts"));
    }
}
