<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'address', 'email', 'email_verified_at',
    ];

    public function disc()
    {
        return $this->belongsToMany('App\Disc', 'disc_user')
            ->withPivot('comment')
            ->withTimestamps();
    }

    public function rentals()
    {
        return $this->belongsToMany('App\Disc', 'disc_rentals')
            ->withPivot(['rentalDate', 'returnDate'])
            ->withTimestamps();
    }
}
