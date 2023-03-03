<?php

namespace App\Http\Controllers\Admin\UserSubjectClass;

use App\Http\Controllers\Controller;
use App\Models\UserSubjectClass;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(UserSubjectClass $userSubjectClass)
    {
        // TODO: Implement __invoke() method.
        return view('admin.userSubjectClass.show',compact("userSubjectClass"));
    }
}
