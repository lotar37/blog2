<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Subject $subject)
    {
        // TODO: Implement __invoke() method.
        return view('admin.subjects.edit', compact('subject'));
    }
}
