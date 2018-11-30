<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
    protected $table = "discs";
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
    public function users()
    {
        return $this->belongsToMany('App\User', 'disc_User')
            ->withPivot('comment')
            ->withTimestamps();
    }
    public function rental()
    {
        return $this->belongsToMany('App\User')
            ->withPivot('checkout_time','checkin_time')
            ->withTimestamps();
    }
}
