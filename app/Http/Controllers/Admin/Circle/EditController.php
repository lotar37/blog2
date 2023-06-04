<?php

namespace App\Http\Controllers\Admin\Circle;

use App\Http\Controllers\Controller;
use App\Models\Circle;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Circle $circle)
    {

        return view('admin.circles.edit', compact('circle'));
    }
}
