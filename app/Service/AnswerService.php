<?php

namespace App\Service;

use App\Models\Answer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AnswerService
{
    public function store($data)
    {
        try {

            DB::beginTransaction();
            Answer::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            //dd($exception);
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $answer)
    {
        try {
            DB::beginTransaction();
            $answer->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
       // return $answer;

    }
}
