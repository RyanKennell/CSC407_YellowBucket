<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Movie;
	class CreatemovieController extends Controller
	{
		public function admin()
		{
			$movies = Movie::all();
			return view('admin', ['movies' => $movies]);
		}
		
		
		public function add(Request $request)
		{
			$this->validate($request,[
			'title' => 'required',
			'description' => 'required' 
			]);
			
			$movies = new Movie;
			$movies-> title = $request->input('title');
			$movies-> description = $request->input
			('description');
			$movies ->save();
			return redirect('/admin')->with('info','Movie 
			Saved Succesfuly');
		}
		
		public function update($id)
		{
			$movies = Movie::find($id);
			return view('updatemovie', ['movies' => 
			$movies]);
		}
		
		public function edit(Request $request,$id)
		{
			$this->validate($request,[
			'title' => 'required',
			'description' => 'required' 
			]);
			$data =  array(
			'title' => $request->input('title'),
			'description' => $request->input('description')
			);
			Movie::where('id', $id)
			->update($data );
			return redirect('/admin')->with('info','Movie Updated Succesfuly');
		}
		
		public function read($id)
		{
	
		   $movies = Movie::find($id);
			return view('readmovie', ['movies' => $movies]);
		}
		public function delete($id)
		{
	Movie::where('id', $id)
	->delete();
	return redirect('/admin')->with('info','Movie Deleted Succesfuly');
		  
		}
	}