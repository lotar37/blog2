<?php

namespace App\Http\Controllers\Teacher\Homework;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.
//        return view('admin.posts.edit', compact('post'));
        $categories = Category::all();
        $tags = Tag::all();
        $post["date"] = Carbon::parse($post["date"])->format('d-m-Y');
        return view('admin.posts.edit', compact('post','categories', 'tags'));
    }
}
