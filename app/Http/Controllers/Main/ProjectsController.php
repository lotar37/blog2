<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Service\BaseService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectsController extends BaseController
{
//   public $home_service = HomeworkService::class;



    public function index()
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
        $projects = Project::all();
//        dd($projects);
        return view("main.projects.index",compact('role', 'user','projects'));
    }

    public function show(Project $project)
    {
        $role = $this->service->getRole();
        $user = $this->service->getUser();
//        $project->posts = $project->posts()->orderByDesc('id');
        foreach($project->posts as $post){
            $post["date"] = Carbon::parse($post["date"])->format('d.m.Y');
        }
        $project->video_link = str_replace('youtu.be','youtube.com/embed',$project->video_link);
        return view("main.projects.show",compact('role', 'user','project'));
    }
}
