<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
<<<<<<< HEAD
    //
=======
    protected $fillable = [
        'movie_id', 'kiosk_id', 'disc_type',
    ];
    public function movie()
    {
        return $this->belongsToMany('App\Movie')
            ->withPivot('comment')
            ->withTimestamps();
    }
    public function kiosk()
    {
        return $this->belongsToMany('App\Kiosks')
            ->withPivot('comment')
            ->withTimestamps();
    }
    public function rental()
    {
        return $this->belongsToMany('App\User')
            ->withPivot('checkout_time','checkin_time')
            ->withTimestamps();
    }
>>>>>>> refs/remotes/origin/Rental
}
