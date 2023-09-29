<?php

namespace App\Service;

use App\Models\Doc;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DocService
{
    public function store($data)
    {
        try {
            $tagg = false;
            DB::beginTransaction();

            if(isset($data['doc'])) {
                $data['doc'] = Storage::disk("public")->put("/docs", $data['doc']);
            }

            $post = Doc::firstOrCreate($data);

            DB::commit();
        } catch (\Exception $exception) {

            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $doc)
    {
        try {
            DB::beginTransaction();

            if(isset($data['doc'])){
                $data['doc'] = Storage::disk("public")->put("/docs", $data['doc']);
            }

            $doc->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $doc;

    }
}
