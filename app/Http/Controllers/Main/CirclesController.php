<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Circle;
use App\Service\BaseService;
use Illuminate\Http\Request;

class CirclesController extends BaseController
{
//   public $home_service = HomeworkService::class;



    public function index()
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $circles = Circle::all();
//        dd($circles);
        return view("main.circles.index",compact('role', 'user','circles'));
    }

    public function show(Circle $circle)
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $circle->video_link = str_replace('youtu.be','youtube.com/embed',$circle->video_link);
        return view("main.circles.show",compact('role', 'user','circle'));
    }
}
