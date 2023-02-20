<?php

namespace App\Http\Controllers\Teacher\Homework;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SchoolClass;
use App\Models\Subject;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke(Subject $subject, SchoolClass $school_class)
    {
        $data = [];
        $data['subjects'] = Subject::all();
        $data['classes'] = SchoolClass::all();
        $data["user_id"] = $this->service->getUserId();
        $data['subject'] =  $subject;
        $data['school_class'] =  $school_class;
        $data['user'] = $this->service->getUser();
        $data['workload'] = $this->service->getWorkload();
//        dd($data);

        return view('teacher.homeworks.create',compact('data'));
    }
}
