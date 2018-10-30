<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'rating', 'length', 'genreID','description', 'onDVD', 'onBlueRay', 'coverPhoto'
    ];

}
