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
//        $project->video_link = str_replace('youtu.be','youtube.com/embed',$project->video_link);
        $a = $this->checkVideo($project->video_link);
        $project->video_link = $a["link"];
        $project->video_type = $a["type"];
        return view("main.projects.show",compact('role', 'user','project'));
    }
    public function checkVideo($link){

            $type = "some";
            if (strpos($link,"youtu.be")) {
                $link = str_replace("youtu.be","www.youtube.com/embed",$link);
                $type = "youtube";
            }
            if (strpos($link,"/youtube.com")) {
                $link = str_replace("/youtube.com","/www.youtube.com/embed",$link);
                $link = str_replace("/youtu.be","/www.youtube.com/embed",$link);
                $type = "youtube";
            }
            if (strpos($link,"rutube")) {
                $link = str_replace("/video","/play/embed",$link);
                $type = "rutube";
            }

            if (strpos($link,"vkvideo") or strpos($link,"vk.com")) {
//            последнее вхождение в строку символа /
                $addr = substr(strrchr($link,"/"),1);
                $a_addr = explode("_",$addr);
                $link = "https://vkvideo.ru/video_ext.php?oid=".substr($a_addr[0],5)."&id=".$a_addr[1]."&hd=2";
                $type = "vk";
            }

        return ["link"=>$link,"type" =>$type];
    }

}
