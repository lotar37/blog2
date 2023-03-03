<?php

namespace App\Http\Controllers\Admin\UserSubjectClass;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserSubjectClass\UpdateRequest;
use App\Models\UserSubjectClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request)
    {
        //dd($request);
        $data = $request->validated();
        //dd($data);
        $this->service->update($data);
        return redirect()->route("admin.userSubjectClass.index");
    }
}
