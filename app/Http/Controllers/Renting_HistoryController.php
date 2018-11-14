<?php

namespace App\Http\Controllers;

use App\Renting_History;
use Illuminate\Http\Request;
use App\User;
Use App\Disc;

class Renting_HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // $history = Renting_History::get()->toArray();
        $rental = User::has('rental')
            ->with('rental')
            ->get()
          ->toArray();
        return view('rental.index')->with('rental', $rental);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user = User::get()->toArray();

        $disc = Disc::get()->toArray();

        return view('rental.create')->with('user',$user)->with('disc',$disc);
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
        $user_id = $request->user_id;
        $disc_id = $request->disc_id;

        // Assume the rental takes place "now"
        $checkout_time = date('Y-m-d H:i:s');

        // Get the person
        $rental = User::find($user_id);

        // See the Person model for definition of the rentals() relationship
        $rental->rental()->attach($disc_id, ['checkoutTime' => $checkout_time]);


        // Return to the list of rentals (you have to go somewhere)
        return redirect()->route('rental.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
    }
}
