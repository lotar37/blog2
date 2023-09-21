<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {

        $categories = Category::all();
        $projects = Project::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories','tags', 'projects'));
    }
}
