<?php

namespace App\Http\Controllers\Admin\UserSubjectClass;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SchoolClass;
use App\Models\Subject;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $subjects = Subject::all()->sortBy('name');
        $teachers = User::all()->where('role', 1)->sortBy('name');
        $classes = SchoolClass::all();
        return view('admin.user_subject_classes.create',compact('subjects','teachers','classes'));
    }
}
