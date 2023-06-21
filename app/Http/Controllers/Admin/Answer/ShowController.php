<?php

namespace App\Http\Controllers\Admin\Answer;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Answer $answer)
    {
        return view('admin.answers.show',compact("answer"));
    }
}
