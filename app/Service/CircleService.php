<?php

namespace App\Service;

use App\Models\Circle;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CircleService
{
    public function store($data)
    {
        try {

            DB::beginTransaction();
//            dd($data);
//            $data["date"] = Carbon::parse($data["date"])->format('Y-m-d');
            $ava = Storage::disk("public")->put("/images", $data['avatar']);
           //dd($ava);

            $data['avatar'] = $ava;//Storage::disk("public")->put("/images", $data['avatar']);
//            dd($data);
            Circle::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            //dd($exception);
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $circle)
    {
        try {
            DB::beginTransaction();
            if(isset($data['avatar'])){
                $data['avatar'] = Storage::disk("public")->put("/images", $data['avatar']);
            }
            $circle->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $circle;

    }
}
