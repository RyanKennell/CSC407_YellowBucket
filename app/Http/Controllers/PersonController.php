<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = Person::get()->toArray();

        return view('people.index')->with('people', $p);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePersonValidation $request)
    {
        // Gather input data except for the CSRF token
        $input = $request->except('_token');

        // Create an instance of the person model and save the input data
        $person = new Person($input);
        $person->save();

        // Return to the list of people
        return redirect()->route('people.index');
    }


        /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }

    /**
     * Add a car to a particular person
     * @param $id
     */
    public function addUser($id)
    {
        $disc = Disc::find(4);
        $disc->user()->attach($id, ['comment' => 'Good person for the disk!']);

        $disks = disc::with('user')->get()->toArray();
        dd($disks);

    }
}
