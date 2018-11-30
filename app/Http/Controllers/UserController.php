<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Renting_history;
use Illuminate\Support\Facades\Auth;
use App\Movie;
use App\Disc;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //dd($users);
        return view('users', ['users' =>
            $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
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
            ->update(['email' => $email]);

        //Update the address field
        DB::table('users')
            ->where('id', $user_id)
            ->update(['address' => $address]);

        return redirect('/accountInfo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function addUser($id)
    {
        $user = User::find(4);
        $user->disc()->attach($id, ['comment' => 'Good person for the Movie!']);

        $users = User::with('disc')->get()->toArray();
        dd($users);
    }
}
