<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
    	'username',
    	'description',
    	'language',
    	'profile_image'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
