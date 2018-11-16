<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Rentalhistory;



class RentalhistoryController extends Controller
{
	public function index(){
		$rentalhistory = Rentalhistory::all();
		//dd($users);
		return view('rentalhistory',['rentalhistory' => 
			$rentalhistory]);



	}
}