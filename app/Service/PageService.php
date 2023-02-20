<?php

namespace App\Service;

use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PageService extends BaseService
{
    public function store($data)
    {
        try {

            DB::beginTransaction();
            ///заплатка. нужно удалить поле content из таблицы pages

            $data['main_image'] = Storage::disk("public")->put("/images", $data['main_image']);
            $page = Page::firstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $page)
    {
        try {
            DB::beginTransaction();

            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk("public")->put("/images", $data['main_image']);
            }
            $page->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $page;

    }

//    public function getUser()
//    {
//        return is_null(auth()->user()) ? "" : auth()->user()->name;
//    }
//
//    public function getRole()
//    {
//        return is_null(auth()->user()) ? 2 :  auth()->user()->role;
//    }
}
