<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Report\UpdateRequest;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Report $report)
    {
        // TODO: Implement __invoke() method.
        $data = $request->validated();
        $data["date"] = Carbon::parse($request->date)->format('Y-m-d');
        $report->update($data);
        return view('admin.reports.show', compact('report'));
    }
}
