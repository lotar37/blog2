<?php

namespace App\Http\Controllers\Admin\UserSubjectClass;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\SchoolClass;
use App\Models\Subject;
use App\Models\Tag;
use App\Models\User;
use App\Models\UserSubjectClass;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(User $user,Subject $subject)
    {
        $data = [];
        $data['subjects'] = Subject::all()->sortBy('name');
        $data['classes'] = SchoolClass::all();
        $data['teachers'] = User::all()->where('role', 1)->sortBy('name');
        $data['subject'] = $subject;
        $data['user'] = $user;

        $userSubjectClasses = UserSubjectClass::all()->where('user_id', $user->id)->where('subject_id', $subject->id);
        $classes = $this->getClassesForUserSubject($userSubjectClasses);
        return view('admin.user_subject_classes.edit', compact( 'classes','data'));
    }
    private function getClassesForUserSubject($userSubjectClasses){
        $data = [];
        foreach($userSubjectClasses as $userSubjectClass){
            $data[] = $userSubjectClass->class_id;
        }
        return $data;
    }
}
