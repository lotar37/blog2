<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "posts";
    protected $guarded = false;

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }
    public static function randomPosts($number){
        $posts =  Post::inRandomOrder()->where('inside_link',null)->limit($number)->get();
        foreach($posts as $post){
            if(is_null($post['main_image'])){
                $post['main_image'] = $post['preview_image'];
            }
            if(is_null($post['preview_image'])){
                $post['preview_image'] = $post['main_image'];
            }
        }

        return $posts;
    }
    public static function maxViewPosts($number){
        return Post::all()->where('inside_link',null)->sortByDesc('count_views')->slice(0,$number);
    }
    public static function mainPageCarouselPosts($number){
        return Post::all()->sortByDesc('date')->where('mainpage','1')->slice(0,$number);
    }
    public function getCountViewsAttribute(){
        return View::all()->where('table', 'posts')->where('forign_id', $this->id)->count();
    }
    public function getCategoryNameAttribute(){
        return Category::all()->where('id',$this->category_id)->first()->title;
    }

    public function getFormatedDateAttribute()
    {
        return Carbon::parse($this->date)->format('d.m.Y');
    }
    public static function getAllImages(){

    }
    public function getShortContentAttribute()
    {
        $a = explode(" ", strip_tags($this->content));
        return implode(" ",array_slice($a,0,40));
    }


}
