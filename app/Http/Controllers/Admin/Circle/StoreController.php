<?php

namespace App\Http\Controllers\Admin\Circle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Circle\StoreRequest;
use App\Models\Circle;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
//        dd($data);
        $this->service->store($data);
        return redirect()->route("admin.circle.index");
    }
}
