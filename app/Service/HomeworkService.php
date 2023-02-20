<?php

namespace App\Service;

use App\Models\Homework;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeworkService extends BaseService
{
    public function store($data)
    {
        try {

            DB::beginTransaction();
            ///заплатка. нужно удалить поле content из таблицы pages

      //      $data['main_image'] = Storage::disk("public")->put("/images", $data['main_image']);
            Homework::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $homework)
    {
        try {
            DB::beginTransaction();

            $homework->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $homework;

    }


}
