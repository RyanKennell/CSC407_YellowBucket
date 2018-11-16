<?php

namespace App\Http\Controllers;

use App\Renting_history;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Movie;
use App\Disc;
use Illuminate\Support\Facades\DB;

//Author @ Ryan Kennell

class UserController extends Controller
{
    public function show()
    {
        $current_rentals = Renting_history::get()
            ->where('checkin_time', null)
            ->where('user_id', Auth::user()->id)
            ->toArray();

        $past_rentals = Renting_history::get()
            ->where('checkin_time', !null)
            ->where('user_id', Auth::user()->id)
            ->toArray();

        $current_rentals = array_values($current_rentals);
        $past_rentals = array_values($past_rentals);

        $movies = Movie::get()->toArray();
        $discs = Disc::get()->toArray();

        $data = array($current_rentals, $movies, $past_rentals, $discs);

        return view('user.userInfo')->with('data', $data);
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $name = $request->input('name');
        $email = $request->input('email');
        $address = $request->input('address');

        //Update the name field
        DB::table('users')
            ->where('id', $user_id)
            ->update(['name' => $name]);

        //Update the email field
        DB::table('users')
        ->where('id', $user_id)
        ->update( ['email' => $email]);

        //Update the address field
        DB::table('users')
            ->where('id', $user_id)
            ->update(['address' => $address]);
    }
}
