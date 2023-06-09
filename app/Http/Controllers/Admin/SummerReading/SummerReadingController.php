<?php

namespace App\Http\Controllers\Admin\SummerReading;


use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Requests\Admin\SummerReading\StoreRequest;
use App\Models\Homework;
use App\Models\SchoolClass;
use App\Models\Subject;
use App\Models\UserSubjectClass;
use App\Service\HomeworkService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SummerReadingController
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
        $data = [];

        $data['subjects'] = Subject::all();
        $data['classes'] = SchoolClass::all();

        $homeworks = Homework::all()->sortByDesc('set_for_date');
        $homeworks = $homeworks->map(function ($item,$key){ $item['set_for_date'] = Carbon::parse($item['set_for_date'])->format('d/m/Y');return $item;});

        $homeworks = $this->sortHomeworksForSubjects($homeworks);

        // dd($homeworks);
        return view("main.homeworks.index",compact('homeworks','data'));
    }
    public function showClassHomeworks(SchoolClass $schoolClass)
    {
        $data = [];

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
    public function edit(SchoolClass $schoolClass)
    {
        $data['subject'] = Subject::all()->where('name', 'Летнее чтение')->first();
        $data['class'] = $schoolClass;
        $data['date'] = Carbon::parse(now())->format('d.m.Y');
        $homework = Homework::all()->where("subject_id",$data['subject']->id)->where("class_id",$schoolClass->id)->sortByDesc('set_for_date')->first();
        if(isset($homework)){
            $homework->set_for_date  = Carbon::parse($homework->set_for_date)->format('d.m.Y');
        }
        return view("admin.summer_reading.edit",compact('homework','data'));
    }
    public function update(StoreRequest  $request){
        $data = $request->validated();
        //dd($data);
        try {

            DB::beginTransaction();
            $data["set_for_date"] = Carbon::parse($data["set_for_date"])->format('Y-m-d');
//            $data['subject'] = Subject::all()->where('name', 'Летнее чтение')->first();
            $homework = Homework::all()->where("subject_id",$data['subject_id'])->where("class_id",$data['class_id'])->first();
            if (isset($homework)){
                $homework->update($data);
            }else{
                $homework = Homework::firstOrCreate($data);
            }

            DB::commit();
            return redirect()->route('admin.summer_reading.edit',$data["class_id"] );

        } catch (\Exception $exception) {
            //dd($exception);
            DB::rollBack();
            abort(500);
        }


    }
}
