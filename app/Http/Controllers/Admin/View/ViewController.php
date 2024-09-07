<?php

namespace App\Http\Controllers\Admin\View;


use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\PostVisit;
use App\Models\View;
use Illuminate\Support\Facades\DB;

class ViewController
{
    public function countPostViews()
    {
        $views = View::all()->where("table","posts")->groupBy("forign_id")->map->count() ;
        foreach ($views as $id => $view) {
            $visits = PostVisit::all()->where("post_id",$id)->first();

            if(!is_null($visits)){
                $data = ["post_id" => $id,
                          "number_visits"=>($visits["number_visits"] + $view)];
                $visits->update($data);

            }else{
                $data = ["post_id" => $id, "number_visits"=>($view)];
                PostVisit::firstOrCreate($data);
            }

        }
        View::truncate();

        return redirect()->route("admin.main.index");

    }
}
