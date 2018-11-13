<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renting_History extends Model
{
    protected $fillable = [
        'checkout_time', 'checkin_time', 'user_id','disc_id',
    ];
    public function disc()
    {
        return $this->belongsToMany('App\Disc')
            ->withPivot('comment')
            ->withTimestamps();
    }
    public function user()
    {
        return $this->belongsToMany('App\User')
            ->withPivot('comment')
            ->withTimestamps();
    }

}
