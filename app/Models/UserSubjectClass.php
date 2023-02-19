<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubjectClass extends Model
{
    use HasFactory;
    protected $table = "user_subject_classes";
    protected $guarded = false;

}
