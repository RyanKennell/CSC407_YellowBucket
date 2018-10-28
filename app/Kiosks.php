<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kiosks extends Model
{
    protected $fillable = [
      'location','address',
    ];
}
