<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $projects = Project::all();
        return view('admin.projects.index',compact("projects"));
    }
}
