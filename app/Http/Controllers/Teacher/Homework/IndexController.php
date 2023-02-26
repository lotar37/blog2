<?php

namespace App\Http\Controllers\Teacher\Homework;

use App\Http\Controllers\Teacher\Homework\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Homework;
use App\Models\Post;
use App\Models\SchoolClass;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Subject $subject, SchoolClass $schoolClass)
    {
        // TODO: Implement __invoke() method.
        $data = [
            "subject"=>$subject,
            "school_class"=>$schoolClass
        ];
        $data['subjects'] = Subject::all();
        $data['classes'] = SchoolClass::all();
        $data['user'] = $this->service->getUser();
        $data['workload'] = $this->service->getWorkload();
        $homeworks = Homework::all()->where('subject_id',$subject->id)->where('class_id',$schoolClass->id)->sortByDesc('set_for_date');
        $homeworks = $homeworks->map(function ($item,$key){ $item['set_for_date'] = Carbon::parse($item['set_for_date'])->format('d/m/Y');return $item;});
        //dd($homeworks);
        return view('teacher.homeworks.index',compact('homeworks','data'));
    }
}
