<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function __invoke()
    {
        if(is_null(auth()->user())){
            $role = 2;
            $user = "";
        }else{
            $role = auth()->user()->role;
            $user = auth()->user()->name;
        }
        $reports = Report::all();
        foreach($reports as $report){
            $report->date = Carbon::parse($report->date)->format('d.m.Y');
        }
        return view("main.reports",compact('role', 'user','reports'));
    }
}
