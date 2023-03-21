<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Subject\StoreRequest;
use App\Models\Subject;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Subject::firstOrCreate($data);
        $subjects = Subject::all();
        return view('admin.subjects.index',compact("subjects"));
//        return redirect()->route("admin.subjects.index");
    }
}
