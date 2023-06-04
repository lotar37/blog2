<?php

namespace App\Http\Controllers\Admin\Circle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.circles.create');
    }
}
