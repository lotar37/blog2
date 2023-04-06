<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = "tags";
    protected $guarded = false;

    public function getPostAtTagAttribute(){
        return PostTag::all()->where('tag_id', $this->id)->count();
    }

}
