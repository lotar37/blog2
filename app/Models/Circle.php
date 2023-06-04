<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    use HasFactory;
    protected $table = "circles";
    protected $guarded = false;

    function getShortDescriptionAttribute(){

        $a = explode(" ", strip_tags($this->description));
        return implode(" ",array_slice($a,0,40));
    }
}
