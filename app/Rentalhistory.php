<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rentalhistory extends Model
{
    protected $table = "renting_history";
    protected $fillable =['users_id','disc_id'];
    public function disc()
    {
        return $this->belongsToMany('App\Disc')
            ->withPivot('disc_id')
            ->withTimestamps();
    }
    public function user()
    {
        return $this->belongsToMany('App\User')
            ->withPivot('user_id')
            ->withTimestamps();
    }

}
