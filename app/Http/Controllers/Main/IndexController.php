<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $role = $this->service->getRole();
        $user = $this->service->getUser();;
//        $posts = Post::all()->sortDesc();
//        foreach($posts as $post){
//            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
//        }
        $posts3 = Post::all()->where('inside_link',null)->where('category','!=','2')->sortByDesc('date')->take(3);
        foreach($posts3 as $post){
            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        }
        $categories = Category::all();
        $reports = Report::all()->sortByDesc('date');
        //dd($reports[0]->short." ".$reports[0]->date);
        foreach($reports as $report){
            $report->date = Carbon::parse($report->date)->format('d.m.Y');
        }
        $randomPosts = Post::randomPosts(2);
        $carouselPosts = Post::mainPageCarouselPosts(5);
//        dd($carouselPosts);
        return view("main.index",compact('role', 'user','posts3','categories','reports','randomPosts','carouselPosts'));
    }
}
