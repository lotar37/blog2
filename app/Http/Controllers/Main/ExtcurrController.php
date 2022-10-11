<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtcurrController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        if(is_null(auth()->user())){
            $role = 2;
            $user = "";
        }else{
            $role = auth()->user()->role;
            $user = auth()->user()->name;
        }

        return view("main.extcurr",compact('role', 'user'));
    }
}
