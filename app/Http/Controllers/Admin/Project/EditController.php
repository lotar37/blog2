<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Project $project)
    {

        return view('admin.projects.edit', compact('project'));
    }
}
