<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Subject $subject)
    {
        // TODO: Implement __invoke() method.
        $subject->delete();
        $subjects = Subject::all();
        return view('admin.subjects.index',compact("subjects"));

//        return redirect()->route('admin.subjects.index');
    }
}
