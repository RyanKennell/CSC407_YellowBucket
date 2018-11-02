<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

/**
 * Class MovieController
 * @package App\Http\Controllers
 * @Author Ryan Kennell
 */
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::get()->toArray();
        return view('movies.movie')->with('movies', $movies);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = Movie::get()->toArray();
        $genres = Genre::get()->toArray();
        for($i = 0; $i < count($movies); $i ++)
        {
            if($id == $movies[$i]['id'])
            {
                for($y = 0; $y < count($genres); $y ++)
                {
                    if($movies[$i]['genreID'] == $genres[$y]['id'])
                    {
                        $data = array($movies[$i], $genres[$y]);
                        return view('movies.movieinfo')->with('data', $data);
                    }
                }
            }
        }

        //no movie found
        return null;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
