<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Report\UpdateRequest;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Report $report)
    {
        // TODO: Implement __invoke() method.

        $data = $request->validated();
        $report = $this->service->update($data, $report);

        return view('admin.reports.show', compact('report'));
    }
}
