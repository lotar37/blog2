<?php

namespace App\Http\Controllers\Teacher\Homework;

use App\Http\Controllers\Controller;
use App\Models\Homework;
use App\Models\SchoolClass;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Homework $homework)
    {
        // TODO: Implement __invoke() method.
//        return view('admin.posts.edit', compact('post'));
        $data = [];
        $data['subjects'] = Subject::all();
        $data['classes'] = SchoolClass::all();
        $data["user_id"] = $this->service->getUserId();
        $data['subject'] =  Subject::all()->where("id",$homework->subject_id)->first();
        $data['school_class'] =  SchoolClass::all()->where("id",$homework->class_id)->first();
        $data['user'] = $this->service->getUser();
        $data['workload'] = $this->service->getWorkload();
        $homework["set_for_date"] = Carbon::parse($homework["set_for_date"])->format('d-m-Y');
        return view('teacher.homeworks.edit', compact('homework','data'));
    }
}
