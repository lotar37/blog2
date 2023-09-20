<?php

namespace App\Service;

use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectService
{
    public function store($data)
    {
        try {

            DB::beginTransaction();
            $ava = Storage::disk("public")->put("/images", $data['avatar']);

            $data['avatar'] = $ava;
            Project::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $project)
    {
        try {
            DB::beginTransaction();
            if(isset($data['avatar'])){
                $data['avatar'] = Storage::disk("public")->put("/images", $data['avatar']);
            }
            $project->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $project;

    }
}
