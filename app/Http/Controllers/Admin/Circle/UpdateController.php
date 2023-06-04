<?php

namespace App\Http\Controllers\Admin\Circle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Circle\UpdateRequest;
use App\Models\Circle;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Circle $circle)
    {
        // TODO: Implement __invoke() method.

        $data = $request->validated();
        $circle = $this->service->update($data, $circle);

        return redirect()->route("admin.circle.index");
    }
}
