<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'address', 'email', 'email_verified_at',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function disc()
    {
        return $this->belongsToMany('App\Disc')
            ->withPivot('comment')
            ->withTimestamps();
    }

    public function rentals()
    {
        return $this->belongsToMany('App\Renting_History')
            ->withPivot(['checkout_time', 'checkin_time'])
            ->withTimestamps();
    }
}
