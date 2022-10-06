<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Report $report)
    {
        return view('admin.reports.edit', compact('report'));
    }
}
