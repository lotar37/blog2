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

class HomeworksController extends BaseController
{
    public $home_service = HomeworkService::class;
    public function index(HomeworkService $service)
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $data = [];
        $data['subjects'] = Subject::all();
        $data['classes'] = SchoolClass::all();
        $workload =  UserSubjectClass::all()->sortBy("class_id")->groupBy('subject_id');

        $homeworks = Homework::all()->sortByDesc('set_for_date')->sortBy('class_id');
        $homeworks = $homeworks->map(function ($item,$key){ $item['set_for_date'] = Carbon::parse($item['set_for_date'])->format('d/m/Y');return $item;});



        dd($homeworks);
        return view("main.homeworks.index",compact('role', 'user','workload','homeworks','data'));
    }
}
