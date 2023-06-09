<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Homework;
use App\Models\Report;
use App\Models\SchoolClass;
use App\Models\Subject;
use App\Models\UserSubjectClass;
use App\Service\BaseService;
use App\Service\HomeworkService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SummerReadingController extends BaseController
{
    public $home_service = HomeworkService::class;

    private function sortHomeworksForSubjects($homeworks){
        $HW = [];
        foreach($homeworks as $homework){
            if(!isset($HW[$homework->subject_id])){
                $HW[$homework->subject_id] = [];
            }
            $HW[$homework->subject_id][$homework->class_id][] = $homework;
        }
        return $HW;
    }
    private function sortWorkload($workload){
        $WL = [];
        foreach($workload as $a){
            $WL[$a['subject_id']][$a['class_id']] = [];
        }
        return $WL;
    }
    public function index()
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $data = [];
        $data['colors'] = $this->service->getClassesColors();
//        $data['subjects'] = Subject::all();
        $data['subject'] = Subject::all()->where('name', 'Летнее чтение')->first();
//        $data['classes'] = SchoolClass::all();


        return view("main.summer_reading.index",compact('role', 'user','data'));
    }
    public function showClassHomeworks(SchoolClass $schoolClass)
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $data = [];

        $data['colors'] = $this->service->getClassesColors();
        $data['subjects'] = Subject::all();
        $data['classes'] = SchoolClass::all();
        $data['class'] = $schoolClass;
        $workload =  UserSubjectClass::all()->where('class_id',$schoolClass->id);
        $workload =  $this->sortWorkload($workload);

        $homeworks = Homework::all()->where('class_id',$schoolClass->id)->where('set_for_date',">",now())->sortByDesc('set_for_date');
        $homeworks = $homeworks->map(function ($item,$key){ $item['set_for_date'] = Carbon::parse($item['set_for_date'])->format('d/m/Y');return $item;});

        $homeworks = $this->sortHomeworksForSubjects($homeworks);

//        dd($homeworks);
        return view("main.homeworks.show_class",compact('role', 'user','workload','homeworks','data'));
    }
    public function show(SchoolClass $schoolClass)
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $data = [];

        $data['subject'] = Subject::all()->where('name', 'Летнее чтение')->first();
        $data['class'] = $schoolClass;
        $data['homework'] = Homework::all()->where('class_id',$schoolClass->id)->where('subject_id',$data['subject']->id)->first();
        return view("main.summer_reading.show",compact('role', 'user','data'));
    }
}
