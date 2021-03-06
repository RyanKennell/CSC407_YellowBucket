<?php

namespace App\Http\Controllers;

use App\Disc;
use Illuminate\Http\Request;
use App\User;

class DiscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $disc = Disc::with('people')->get()->toArray();
        //dd($disc);

        $users = User::with('discs')->get()->toArray();
        dd($users);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disc  $disc
     * @return \Illuminate\Http\Response
     */
    public function show(Disc $disc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disc  $disc
     * @return \Illuminate\Http\Response
     */
    public function edit(Disc $disc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disc  $disc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disc $disc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disc  $disc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disc $disc)
    {
        //
    }
    /**
     * Add a disc to a particular user
     * @param $id
     */
    public function addUser($id)
    {
        $disc = Disc::find(4);
        $disc->user()->attach($id, ['comment' => 'Good person for the Movie!']);

        $disks = Disc::with('user')->get()->toArray();
        dd($disks);

    }
}
