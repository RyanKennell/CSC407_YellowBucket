<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renting_history extends Model
{
    protected $fillable = [
        'checkout_time', 'checkin_time', 'user_id', 'disc_id',
    ];
}
