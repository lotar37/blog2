<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudyplanController extends BaseController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $role = $this->service->getRole();
        $user = $this->service->getUser();;

        return view("main.studyplan",compact('role', 'user'));
    }
}
