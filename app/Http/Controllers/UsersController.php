<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;



class UsersController extends Controller
{
	public function index(){
		$users = User::all();
		//dd($users);
		return view('users',['users' => 
			$users]);



	}
}