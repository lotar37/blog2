<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Post;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends BaseController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $role = $this->service->getRole();
        $user = $this->service->getUser();
//        dd(Hash::make('123456'));
       // dd(substr(exec('getmac'),0,17));
//        $posts = Post::all()->sortDesc();
//        foreach($posts as $post){
//            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
//        }
        $posts3 = Post::all()->where('inside_link',null)->where('category_id','!=','2')->sortByDesc('date')->take(3);
        foreach($posts3 as $post){
            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
            if(is_null($post['main_image'])){
                $post['main_image'] = $post['preview_image'];
            }
        }
        $categories = Category::all();
        $answers = Answer::all();
        //dd(\Request::ip());
//        $mac = exec('getmac');
//        $mac = explode(" ",$mac);
//        dd($mac[0]);
//        $reports = Report::all()->sortByDesc('date');
        $reports = Report::randomReports(5);
        foreach($reports as $report){
            $report->date = Carbon::parse($report->date)->format('d.m.Y');
        }
        $randomPosts = Post::randomPosts(2);
        $carouselPosts = Post::mainPageCarouselPosts(5);
//        dd($carouselPosts);
        return view("main.index",compact('role', 'user','posts3','categories','reports','randomPosts','carouselPosts','answers'));
    }
}
