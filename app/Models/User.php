<?php

namespace App\Models;

use App\Models\Profile;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function profile(){

        //return $this->hasOne(Profile::class);
        return $this->hasOne(Profile::class, 'user_id', 'id');
        //     $this->hasOne(Profile::class, 'foreign_key', 'local_key');
    }

    public function roles(){
        return $this->belongsToMany(Role::class)->withTimestamps()->withPivot('description');
        // return $this->belongsToMany(Role::class)->withTimestamps()->withPivot('description')->wherePivot('is_status', '1');

        // return $this->belongsToMany(User::class, 'role_user', 'user_id', 'role_id', 'id', 'id');
    }

    public function carinfo(){
        return $this->hasOneThrough(CarInfo::class, Car::class);
    }
}
