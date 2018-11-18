<?php

namespace App\Http\Controllers;

use App\Rentalhistory;
use Illuminate\Http\Request;
use App\User;
use App\Movie;
use App\Disc;
use Illuminate\Support\Facades\DB;

class Renting_HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rentalhistory = Rentalhistory::all();

        $users = User::get()->toArray();
        $discs = Disc::get()->toArray();
        $movies = Movie::get()->toArray();

        $data = array($rentalhistory, $users, $discs, $movies);
        //dd($users);
        return view('rentalhistory',['data' =>
            $data]);
    }
    public function show($id)
    {
        $rentalhistory = Rentalhistory::get()->toArray();

        $users = User::get()->toArray();
        $discs = Disc::get()->toArray();
        $movies = Movie::get()->toArray();
        for($i = 0; $i < count($rentalhistory); $i ++)
        {
            if($id == $rentalhistory[$i]['id'])
            {
                for($y = 0; $y < count($users); $y ++)
                {
                    for($z = 0; $z < count($discs); $z ++)
                    {
                        if ($rentalhistory[$i]['id'] == $users[$y]['name']) {
                            $data = array($users[$i], $movies[$y], $discs[$z]);
                            return view('rental.return')->with('data', $data);
                        }
                    }
                }
            }
        }

        return null;
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

        return view('rentals.create')->with('user',$user)->with('disc',$disc);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');

        $rental = new Rentalhistory($input);
        $rental->save();
        $users = User::get()->toArray();
        $discs = Disc::get()->toArray();
        $movies = Movie::get()->toArray();

        $data = array($rental, $users, $discs, $movies);
        dd($data);
        // Return to the list of rentals (you have to go somewhere)
        return view('rentalhistory',['data'=> $data]);
    }
    public function update($id)
    {
        $rentals = Rentalhistory::find($id);
        return view('rental.return', ['rentals' => $rentals]);

    }

}
