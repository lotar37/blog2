<?php

namespace App\Http\Controllers\Main;

use App\Models\Post;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PostController extends BaseController
{
    public function index($shift = 0)
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $posts = Post::all()->where('inside_link',null)->sortByDesc('date')->take(9);
        $posts = $this->separatePosts($posts);

        $randomPosts4 = Post::randomPosts(4);
//        $randomPosts3 = Post::maxViewPosts(5);
        $randomPosts3 = Post::randomPosts(10);


        return view("main.post_index",compact('role', 'user','posts','randomPosts4','randomPosts3'));
    }

    public function show(Post $post)

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

    public function listPosts()
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();

        $posts = Post::where('inside_link',null)->orderByDesc('date')->paginate(5);
        return view('main.post_list',compact("posts",'role', 'user'));
    }

    private function separatePosts($posts){

        foreach($posts as $post){
            if(is_null($post['preview_image'])){
                $post['preview_image'] = $post['main_image'];
            }
        }
        $a1 = $posts->slice(0,3);
        $a2 = $posts->slice(3)->chunk(2);
        return array($a1,$a2);
    }

}
