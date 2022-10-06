<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Report;

class DeleteController extends Controller
{
    public function __invoke(Report $report)
    {
        // TODO: Implement __invoke() method.
        $report->delete();
        return redirect()->route('admin.report.index');
    }
}
