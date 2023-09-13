<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = "reports";
    protected $guarded = false;

    public function getShortAttribute()
    {
        $a = explode(" ", strip_tags($this->content));
        return implode(" ",array_slice($a,0,40));
    }
    public function getLongAttribute()
    {
        $a = explode(" ", strip_tags($this->content));
        return implode(" ",array_slice($a,40));
    }
    public static function randomReports($number){
        return Report::inRandomOrder()->limit($number)->get();
    }

}
