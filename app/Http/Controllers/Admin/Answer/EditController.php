<?php

namespace App\Http\Controllers\Admin\Answer ;

use App\Http\Controllers\Controller;
use App\Models\Answer ;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Answer $answer)
    {

        return view('admin.answers.edit', compact('answer'));
    }
}
