<?php

namespace App\Http\Controllers;

use App\DiscRental;
use Illuminate\Http\Request;
use App\Disc;
use App\User;

class DiscRentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get everybody that has rented a car
        $rentals = User::has('rentals')   // has() only returns rows that have entries in the pivot table - in this case they rented a car
        ->with('rentals')       // we need to include all of the rentals data
        ->get()                 // get the records
        ->toArray();            // return as an array

        return view('rentals.index')->with('rentals', $rentals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get the Users
        $user = User::get()->toArray();

        // Get the Cars
        $disc = Disc::get()->toArray();

        // return the create rentals view with the lists of people and cars
        return view('rentals.create')->with('users', $user)->with('disc', $disc);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Parse input data
        $users_id = $request->users_id;
        $disc_id = $request->disc_id;

        // Assume the rentals takes place "now"
        $rental_date = date('Y-m-d H:i:s');

        // Get the person
        $rental = User::find($users_id);

        // See the Person model for definition of the rentals() relationship
        $rental->rentals()->attach($disc_id, ['rentalDate' => $rental_date]);

        // Return to the list of rentals (you have to go somewhere)
        return redirect()->route('rentals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DiscRental  $discRental
     * @return \Illuminate\Http\Response
     */
    public function show(DiscRental $discRental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiscRental  $discRental
     * @return \Illuminate\Http\Response
     */
    public function edit(DiscRental $discRental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiscRental  $discRental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiscRental $discRental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiscRental  $discRental
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiscRental $discRental)
    {
        //
    }
}
