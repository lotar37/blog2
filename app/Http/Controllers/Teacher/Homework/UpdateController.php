<?php

namespace App\Http\Controllers\Teacher\Homework;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Homework\UpdateRequest;
use App\Models\Homework;
use App\Models\SchoolClass;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Homework $homework)
    {
        // TODO: Implement __invoke() method.
        //dd($homework);
        $data = $request->validated();
       //dd($data);
        $this->service->update($data, $homework);
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
        return view('teacher.homeworks.index', compact('data','homeworks'));

    }
}
