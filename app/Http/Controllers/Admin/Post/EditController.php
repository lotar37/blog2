<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
//        dd($post);
        $categories = Category::all();
        $tags = Tag::all();
        $projects = Project::all();
        $post["date"] = Carbon::parse($post["date"])->format('d-m-Y');
        return view('admin.posts.edit', compact('post','categories', 'tags','projects'));
    }
}
