<?php

namespace App\Service;

use App\Models\Homework;
use App\Models\UserSubjectClass;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeworkService extends BaseService
{
    public function store($data)
    {
        try {

            DB::beginTransaction();
            $data["set_for_date"] = Carbon::parse($data["set_for_date"])->format('Y-m-d');
            Homework::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            //dd($exception);
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $homework)
    {
        try {
            DB::beginTransaction();

            $data["set_for_date"] = Carbon::parse($data["set_for_date"])->format('Y-m-d');
            $homework->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        //return $homework;

    }

    public function getWorkload()
    {

        return UserSubjectClass::all()->where('user_id', auth()->id())->sortBy("class_id")->groupBy('subject_id');

    }


}
