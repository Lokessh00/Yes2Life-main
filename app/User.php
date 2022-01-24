<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function foods() {
        return $this->hasMany('App\Food');
    }

    public function days() {
        return $this->hasMany('App\Day');
    }

    public function workouts() {
        return $this->hasMany('App\Workout');
    }

    public function dailys() {
        return $this->hasMany('App\Daily');
    }

    public function profile() {
        return $this->hasOne('App\Profile');
    }
}
