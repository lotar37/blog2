<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Service\BaseService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportsController extends BaseController
{
    public function __invoke()
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();


        $reports = Report::all()->sortByDesc('date');
        foreach($reports as $report){
            $report->date = Carbon::parse($report->date)->format('d.m.Y');
        }
        return view("main.reports",compact('role', 'user','reports'));
    }
}
