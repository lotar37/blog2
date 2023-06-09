<?php

namespace App\Service;

use App\Models\Post;
use App\Models\UserSubjectClass;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserSubjectClassService
{
//    удаляем всю нагрузку для Учителя по предмету
    private function refreshAllClassesFromTeachersSubject($data)
    {
        $uscs = UserSubjectClass::all()->where('subject_id', $data['subject_id'])->where('user_id', $data['user_id']);
        if (count($uscs)) {
            foreach ($uscs as $usc) {
                $usc->delete();
            }
        }
        foreach ($data['classes_ids'] as $class_id) {
            $new_usc = [];
            $new_usc['class_id'] = $class_id;
            $new_usc['subject_id'] = $data['subject_id'];
            $new_usc['user_id'] = $data['user_id'];
            UserSubjectClass::firstOrCreate($new_usc);
        }
    }

    public function store($data)
    {
        try {
            DB::beginTransaction();
            $this->refreshAllClassesFromTeachersSubject($data);
            DB::commit();
        } catch (\Exception $exception) {
            //dd($exception);
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data)
    {
        try {
            DB::beginTransaction();
            $this->refreshAllClassesFromTeachersSubject($data);
            DB::commit();
        } catch (\Exception $exception) {
            //dd($exception);
            DB::rollBack();
            abort(500);
        }

    }
}
