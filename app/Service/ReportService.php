<?php

namespace App\Service;

use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReportService
{
    public function store($data)
    {
        try {

            DB::beginTransaction();
//            dd($data);
            $data["date"] = Carbon::parse($data["date"])->format('Y-m-d');
            $ava = Storage::disk("public")->put("/images", $data['avatar']);
//           dd($ava);
            $data['avatar'] = $ava;//Storage::disk("public")->put("/images", $data['avatar']);
            $post = Report::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            //dd($exception);
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $report)
    {
        try {
            DB::beginTransaction();
            if(isset($data['avatar'])){
                $data['avatar'] = Storage::disk("public")->put("/images", $data['avatar']);
            }
            $data["date"] = Carbon::parse($data["date"])->format('Y-m-d');
            $report->update($data);
               DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $report;

    }
}
