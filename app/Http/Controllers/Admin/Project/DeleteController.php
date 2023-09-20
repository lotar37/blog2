<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;

class DeleteController extends Controller
{
    public function __invoke(Project $project)
    {
        // TODO: Implement __invoke() method.
        $project->delete();
        return redirect()->route('admin.project.index');
    }
}
