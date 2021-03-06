<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email', 'verified', 'email_token', 'email_update'
    ];

    public function votes()
    {
    	return $this->hasMany('App\Vote');
    }

    public function workouts()
    {
    	return $this->hasMany('App\Workout');
    }

    public function subscription()
    {
        return $this->hasOne('App\Subscription');
    }
}
