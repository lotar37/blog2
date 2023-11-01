<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostShowController extends BaseController
{
    public function __invoke(Post $post)

    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $this->service->viewModel('posts',$post->id);
        $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        $randomPosts = Post::randomPosts(5);
        $project = null;
        if($post->project_id){
            $project = Project::all()->where('id', $post->project_id)->first();
        }


        return view('main.post_show',compact("post",'role', 'user','randomPosts','project'));
    }
}
