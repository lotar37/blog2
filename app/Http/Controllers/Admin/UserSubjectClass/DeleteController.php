<?php

namespace App\Http\Controllers\Admin\UserSubjectClass;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Post;
use App\Models\Subject;
use App\Models\User;
use App\Models\UserSubjectClass;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(User $user, Subject $subject)
    {
        // TODO: Implement __invoke() method.
        $uscs = UserSubjectClass::all()->where('user_id', $user->id)->where('subject_id', $subject->id);
        //dd($uscs);
        foreach ($uscs as $usc) {
            UserSubjectClass::destroy($usc->id);
        }
        return redirect()->route('admin.userSubjectClass.index');
    }
}
