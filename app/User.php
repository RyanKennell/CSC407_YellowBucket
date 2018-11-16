<?php



namespace App;



use Illuminate\Database\Eloquent\Model;


use  Illuminate\Notification\Notifiable;


class User extends Model

{
	protected $table = "users";






    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name', 'address', 'email', 'password',

    ];



    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */

    protected $hidden = [

        'password', 'remember_token',

    ];

}