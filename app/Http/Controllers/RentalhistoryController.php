<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Rentalhistory;
use App\User;
use App\Disc;
use App\Movie;

class RentalhistoryController extends Controller
{
	public function index(){
		$rentalhistory = Rentalhistory::all();
		
		$users = User::get()->toArray();
		$discs = Disc::get()->toArray();
		$movies = Movie::get()->toArray();
		
		$data = array($rentalhistory, $users, $discs, $movies);
		//dd($users);
		return view('rentalhistory',['data' => 
			$data]);



	}
}