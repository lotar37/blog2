<?php

namespace App\Http\Controllers\Admin\Circle;

use App\Http\Controllers\Controller;
use App\Models\Circle;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $circles = Circle::all();
        return view('admin.circles.index',compact("circles"));
    }
}
