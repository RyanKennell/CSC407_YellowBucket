<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Author @ Ryan Kennell

class UserController extends Controller
{
    public function show()
    {
        return view('user.userInfo');
    }
}
