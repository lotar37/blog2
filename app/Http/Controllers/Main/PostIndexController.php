<?php

namespace App\Http\Controllers\Main;

use App\Models\Post;

class PostIndexController extends BaseController
{
    public function __invoke($shift = 0)
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $posts = Post::all()->where('inside_link',null)->sortByDesc('date')->take(9);
        $posts = $this->separatePosts($posts);

        $randomPosts4 = Post::randomPosts(4);
//        $randomPosts3 = Post::maxViewPosts(5);
        $randomPosts3 = Post::randomPosts(5);


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
