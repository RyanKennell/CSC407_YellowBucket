<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Genre
 * @package App
 * @Author Ryan Kennell
 */
class Genre extends Model
{
    protected $fillable = [
        'name', 'description'
    ];
}
