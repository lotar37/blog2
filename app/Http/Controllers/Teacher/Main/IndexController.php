<?php

namespace App\Http\Controllers\Teacher\Main;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Teacher\Main\BaseTeacherController;
use App\Models\Post;
use App\Models\SchoolClass;
use App\Models\Subject;
use App\Models\User;
use App\Models\UserSubjectClass;
use Illuminate\Http\Request;

class IndexController extends BaseTeacherController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $data = [];
        $data['postsCount'] = Post::all()->count();
        $data['role'] = $this->service->getRole();
        $data['subjects'] = Subject::all();
        $data['classes'] = SchoolClass::all();
        $data['subject'] = ["id" => "-1"];
        $data['school_class']=["id" => "-1"];

        $data['user'] = $this->service->getUser();
        $data['workload'] = $this->service->getWorkload();
        //dd($data['workload'],$data['subjects']);

        return view('teacher.main.index', compact('data'));
    }
}
