<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LagerThisYearController extends BaseController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $role = $this->service->getRole();
        $user = $this->service->getUser();;
        $posts = Post::all()->where('category_id',2)->sortDesc();
        foreach($posts as $post){
            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        }

        return view("main.index",compact('role', 'user','posts','posts3','categories','reports','randomPosts'));
    }
}
