<?php

namespace App\Http\Controllers\Teacher\Homework;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Homework\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
//        dd($request);
        $data = $request->validated();
//        dd($data);

        $this->service->store($data);
        return redirect()->route("teacher.homework.index",[$data['subject_id'], $data['class_id']]);
    }
}
