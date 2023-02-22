<?php

namespace App\Http\Controllers\Teacher\Homework;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Homework;
use App\Models\Post;
use App\Models\SchoolClass;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Homework $homework)
    {
        $data = [];
        $data['subjects'] = Subject::all();
        $data['classes'] = SchoolClass::all();
        $data["user_id"] = $this->service->getUserId();
        $data['subject'] =  Subject::all()->where("id",$homework->subject_id)->first();
        $data['school_class'] =  SchoolClass::all()->where("id",$homework->class_id)->first();
        $data['user'] = $this->service->getUser();
        $data['workload'] = $this->service->getWorkload();
        $homeworks = Homework::all()->where('subject_id',$data['subject']->id)->where('class_id',$data['school_class']->id);
        $homeworks = $homeworks->map(function ($item,$key){ $item['set_for_date'] = Carbon::parse($item['set_for_date'])->format('d/m/Y');return $item;});
        $homework->delete();
    //    return view('teacher.homeworks.index', compact('data','homeworks'));

        return redirect()->route('teacher.homework.index',[$data['subject']->id,$data['school_class']->id]);
    }
}
