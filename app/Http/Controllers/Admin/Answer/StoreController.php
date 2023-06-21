<?php

namespace App\Http\Controllers\Admin\Answer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Answer\StoreRequest;
use App\Models\Answer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route("admin.answer.index");
    }
}
