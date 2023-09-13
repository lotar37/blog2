<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostIndexController extends BaseController
{
    public function __invoke()
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();;
        $posts = $this->getPostsArray();

        //dd($posts);
//        foreach($posts as $post){
//            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
//        }
        $randomPosts4 = Post::randomPosts(4);
        foreach($randomPosts4 as $post){
            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        }
        $randomPosts3 = Post::maxViewPosts(5);
        $categories = Category::all();
        foreach($randomPosts3 as $post){
            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        }

        return view("main.post_index",compact('role', 'user','categories','posts','randomPosts4','randomPosts3'));
    }
    private function getPostsArray(){
        $arr = Post::all()->where('inside_link',null)->sortByDesc('date')->take(9);
        foreach($arr as $post){
//            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
            if(is_null($post['preview_image'])){
                $post['preview_image'] = $post['main_image'];
            }
        }        $a1 = $arr->slice(0,3);
        $a2 = $arr->slice(3)->chunk(2);
        return array($a1,$a2);
    }

}
