<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostVisit;
use App\Models\Tag;
use App\Models\User;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $data = [];
        $data['usersCount'] = User::all()->count();
        $data['postsCount'] = Post::all()->count();
        $data['categoriesCount'] = Category::all()->count();
        $data['tags'] = $this->getTagCountsArray();
        $data['tagsCount'] = Tag::all()->count();
        $data['current_route'] =  Route::getCurrentRoute()->getName();
        $data['count_visits'] = PostVisit::all()->sum("number_visits");

//        dd($data['tags']);
        return view('admin.main.index', compact('data'));
    }
    private function getTagCountsArray(){
        $tags = Tag::all();
        $a = [];
        foreach($tags as $tag){
            $a[$tag->title] = $tag->post_at_tag;
        }
        return $a;
    }
}
