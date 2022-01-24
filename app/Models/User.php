<?php

namespace App\Models;

use App\Apply;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'avatar',
        'career',
        'adopnumber',
        'experience',
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

    // 一個送養者 可以發布很多個寵物
    public function animal()
    {
        return $this->hasMany(Animal::class,'user_id', 'id');
    }

    // 一個領養者 可以申請很多次寵物 所以有很多張申請表
    public function apply()
    {
        return $this->hasMany(Apply::class,'user_id', 'id');
    }
}
