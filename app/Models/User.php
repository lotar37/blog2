<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Schema;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const ROLE_ADMIN = 0;
    const ROLE_TEACHER = 1;
    const ROLE_STUDENT = 2;
    const ROLE_GUEST = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public static function getRoles()
    {
        return [
            self::ROLE_ADMIN => "Админ",
            self::ROLE_TEACHER => "Учитель",
            self::ROLE_STUDENT => "Ученик",
            self::ROLE_GUEST => "Гость",
        ];
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function likedPosts()
    {
        return $this->belongsToMany(Post::class, 'post_user_likes', 'user_id', 'post_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id','id');
    }
}
