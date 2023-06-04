<?php

namespace App\Http\Controllers\Admin\Circle;

use App\Http\Controllers\Controller;
use App\Models\Circle;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Circle $circle)
    {
        return view('admin.circles.show',compact("circle"));
    }
}
