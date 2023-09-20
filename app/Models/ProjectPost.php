<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPost extends Model
{
    use HasFactory;

    protected $table = "project_posts";
    protected $guarded = false;
}
