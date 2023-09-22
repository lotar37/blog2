<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";
    protected $guarded = false;

    function getShortDescriptionAttribute(){
        $a = explode(" ", strip_tags($this->description));
        return implode(" ",array_slice($a,0,30));
    }
    public function posts(){
        return $this->hasMany(Post::class, 'project_id','id');
    }

}
