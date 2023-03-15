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
        return substr(strip_tags($this->content),0,100);
    }

}
