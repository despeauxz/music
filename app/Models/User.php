<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'active', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function activationToken()
    {
    	return $this->hasOne(ActivationToken::class);
    }

    public function channel()
    {
    	return $this->hasMany(Channel::class);
    }

    public function getUsername()
    {
    	return $this->name;
    }
}
