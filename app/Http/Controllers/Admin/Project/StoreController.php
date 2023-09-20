<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\StoreRequest;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
//        dd($data);
        $this->service->store($data);
        return redirect()->route("admin.project.index");
    }
}
