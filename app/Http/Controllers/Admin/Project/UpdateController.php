<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\UpdateRequest;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Project $project)
    {
        // TODO: Implement __invoke() method.

        $data = $request->validated();
        $project = $this->service->update($data, $project);

        return redirect()->route("admin.project.index");
    }
}
