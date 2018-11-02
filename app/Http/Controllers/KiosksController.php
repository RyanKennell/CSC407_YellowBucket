<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKiosksValidation;
use App\Kiosks;
use Illuminate\Http\Request;


class KiosksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $k = Kiosks::get()->toArray();

        return view('kiosks.index')->with('kiosks', $k);
    }
    public function gmaps()
    {
        $locations = DB::table('kiosks')->get();
        return view('kiosks',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kiosks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateKiosksValidation $request)
    {
        // Gather input data except for the CSRF token
        $input = $request->except('_token');

        // Create an instance of the person model and save the input data
        $kiosks = new Kiosks($input);
        $kiosks->save();

        // Return to the list of people
        return redirect()->route('kiosks.index');
    }


    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response By Brandon Lagorga
     * By Brandon Lagorga
     * @internal param Kiosks $kiosks
     */
    public function show($id)
    {
        $Kiosks = Kiosks::get()->toArray();
        for($i = 0; $i < count($Kiosks); $i ++)
        {
            if($id == $Kiosks[$i]['id'])
            {
                return view('kiosks.kiosksinfo')->with('kiosks', $Kiosks[$i]);
            }
        }
        return null;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kiosks  $kiosks
     * @return \Illuminate\Http\Response
     */
    public function edit(Kiosks $kiosks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kiosks  $kiosks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kiosks $kiosks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kiosks  $kiosks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kiosks $kiosks)
    {
        //
    }
}
