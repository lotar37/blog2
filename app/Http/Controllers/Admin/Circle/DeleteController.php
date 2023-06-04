<?php

namespace App\Http\Controllers\Admin\Circle;

use App\Http\Controllers\Controller;
use App\Models\Circle;

class DeleteController extends Controller
{
    public function __invoke(Circle $circle)
    {
        // TODO: Implement __invoke() method.
        $circle->delete();
        return redirect()->route('admin.circle.index');
    }
}
