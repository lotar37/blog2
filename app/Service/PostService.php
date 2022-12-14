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

            if(isset($data["tag_ids"])){
                $tags_data = $data["tag_ids"];
                $tagg = true;
                unset($data["tag_ids"]);
            }
            $data["date"] = Carbon::parse($data["date"])->format('Y-m-d');
            $data['preview_image'] = Storage::disk("public")->put("/images", $data['preview_image']);
            $data['main_image'] = Storage::disk("public")->put("/images", $data['main_image']);
            $post = Post::firstOrCreate($data);
            if($tagg) {
                $post->tags()->attach($tags_data);
            }
            DB::commit();
        } catch (\Exception $exception) {
            dd($exception);
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $post)
    {
        try {
            DB::beginTransaction();
            if(isset($data["tag_ids"])) {
                $tags_data = $data["tag_ids"];
                unset($data["tag_ids"]);
            }
            if(isset($data['preview_image'])){
                $data['preview_image'] = Storage::disk("public")->put("/images", $data['preview_image']);
            }
            if(isset($data['main_image'])) {
                $data['main_image'] = Storage::disk("public")->put("/images", $data['main_image']);
            }
            $data["date"] = Carbon::parse($data["date"])->format('Y-m-d');
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
