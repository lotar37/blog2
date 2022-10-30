<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Report $report)
    {
        $report["date"] = Carbon::parse($report["date"])->format('d-m-Y');
        return view('admin.reports.edit', compact('report'));
    }
}
