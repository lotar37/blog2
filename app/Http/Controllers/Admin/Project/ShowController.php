<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Project $project)
    {
        return view('admin.projects.show',compact("project"));
    }
}
