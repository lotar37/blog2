<?php

namespace App\Http\Controllers\Admin\UserSubjectClass;

use App\Http\Controllers\Controller;
use App\Models\SchoolClass;
use App\Models\Subject;
use App\Models\User;
use App\Models\UserSubjectClass;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $data = $this->getDataForTeachers();
//        dd($data);
        $teachers = User::all()->where('role',1)->sortBy("name");
        $subjects = Subject::all();
        $classes = SchoolClass::all();
        return view('admin.user_subject_classes.index', compact('teachers', 'subjects','classes', 'data'));
    }

    private function getDataForTeachers()
    {
        $userSubjectClasses = UserSubjectClass::select('user_subject_classes.*','users.name')->join('users','user_subject_classes.user_id','=',"users.id")->get();
        $userSubjectClasses = $userSubjectClasses->sortBy('class_id')->sortBy('name');

        $data = [];
        foreach ($userSubjectClasses as $usc) {
            $data[$usc->user_id][$usc->subject_id][] = $usc->class_id;
        }
        return $data;
    }

    private function getDataForSubjectss()
    {
        $userSubjectClasses = UserSubjectClass::all();
        $data = [];
        foreach ($userSubjectClasses as $usc) {
            $data[$usc->subject_id][$usc->user_id][] = $usc->class_id;
        }
        return $data;
    }
}
