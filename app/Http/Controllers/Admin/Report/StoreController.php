<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Report\StoreRequest;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data["date"] = Carbon::parse($request->date)->format('Y-m-d');

        Report::firstOrCreate($data);
        return redirect()->route("admin.report.index");
    }
}
