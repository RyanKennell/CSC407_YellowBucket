<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
    protected $fillable = [
        'movie_id', 'kiosk_id', 'disc_type',
    ];
    public function movie()
    {
        return $this->belongsToMany('App\Movie')
            ->withPivot('movie_id')
            ->withTimestamps();
    }
    public function kiosk()
    {
        return $this->belongsToMany('App\Kiosks')
            ->withPivot('kiosk_id')
            ->withTimestamps();
    }
    public function rental()
    {
        return $this->belongsToMany('App\User','disc_rentals')
            ->withPivot('rentalDate','returnDate')
            ->withTimestamps();
    }
}
