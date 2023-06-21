<?php

namespace App\Http\Controllers\Admin\Answer;

use App\Http\Controllers\Controller;
use App\Models\Answer;

class DeleteController extends Controller
{
    public function __invoke(Answer $answer)
    {
        // TODO: Implement __invoke() method.
        $answer->delete();
        return redirect()->route('admin.answer.index');
    }
}
