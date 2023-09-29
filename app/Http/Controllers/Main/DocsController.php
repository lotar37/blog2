<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Doc;
use App\Service\BaseService;
use Illuminate\Http\Request;

class DocsController extends BaseController
{



    public function index()
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $docs = Doc::all();
        return view("main.docs",compact('role', 'user','docs'));
    }

//    public function show(Doc $circle)
//    {
//        $role = $this->service->getRole();
//        $user = $this->service->getUser();
//        $circle->video_link = str_replace('youtu.be','youtube.com/embed',$circle->video_link);
//        return view("main.circles.show",compact('role', 'user','circle'));
//    }
}
