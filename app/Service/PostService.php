<?php

namespace App\Service;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            $tagg = false;
            DB::beginTransaction();

            if($data["project_id"] == 0){
                $data["project_id"] =  null;
            }

            if(isset($data["tag_ids"])){
                $tags_data = $data["tag_ids"];
                $tagg = true;
                unset($data["tag_ids"]);
            }
            $data["date"] = Carbon::parse($data["date"])->format('Y-m-d');
            if(isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk("public")->put("/images", $data['preview_image']);
            }

            if(isset($data['mainpage_image'])){
                $data['mainpage_image'] = Storage::disk("public")->put("/images", $data['mainpage_image']);
            }

            if(isset($data['mainpage'])){
                $data['mainpage'] = '1';
            }else{
                $data['mainpage'] = '0';
            }

            if(isset($data['main_image'])) {
                $data['main_image'] = Storage::disk("public")->put("/images", $data['main_image']);
            }
//            dd($data);
            $post = Post::firstOrCreate($data);

            if($tagg) {
                $post->tags()->attach($tags_data);
            }
            DB::commit();
        } catch (\Exception $exception) {

            DB::rollBack();
            //dd($exception);
            abort(500);
        }

    }

    public function update($data, $post)
    {
        try {
            DB::beginTransaction();

            if($data["project_id"] == 0){
                $data["project_id"] =  null;
            }

            if(isset($data["tag_ids"])) {
                $tags_data = $data["tag_ids"];
                unset($data["tag_ids"]);
            }

            if(isset($data['mainpage_image'])){
                $data['mainpage_image'] = Storage::disk("public")->put("/images", $data['mainpage_image']);
            }
            if(isset($data['preview_image'])){
                $data['preview_image'] = Storage::disk("public")->put("/images", $data['preview_image']);
            }
            if(isset($data['main_image'])) {
                $data['main_image'] = Storage::disk("public")->put("/images", $data['main_image']);
            }
            $data["date"] = Carbon::parse($data["date"])->format('Y-m-d');

            if(isset($data['mainpage'])){
                $data['mainpage'] = '1';
            }else{
                $data['mainpage'] = '0';
            }
            $post->update($data);
            if(isset($tags_data)) {
                $post->tags()->sync($tags_data);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $post;

    }
}
