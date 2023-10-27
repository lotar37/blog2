<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostIndexController extends BaseController
{
    public function __invoke($shift = 0)
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $posts = Post::all()->where('inside_link',null)->sortByDesc('date')->take(9);
        $posts = $this->separatePosts($posts);

        $randomPosts4 = Post::randomPosts(4);
        foreach($randomPosts4 as $post){
            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        }
        $randomPosts3 = Post::maxViewPosts(5);

//        $projects = Project::all();
        foreach($randomPosts3 as $post){
            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        }

        return view("main.post_index",compact('role', 'user','posts','randomPosts4','randomPosts3'));
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
