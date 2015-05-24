<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about()
	{
		//return 'About Page';
		
		//$name = 'Patrick <span style="color: red;">Thomas</span>';
		
		//$name = '<script>alert(\'Hi\');</script>';
				
		//return view('pages.about')->with('name', $name);
		
		
		// PASSING DATA FROM [CONTROLLER] TO [VIEW]
		
		// METHOD 1)
		// return view('pages.about')->with([
			// 'first' => 'Patrick',
			// 'last' => 'Thomas'
		// ]);
		
		// METHOD 2)
		// $data = [];
		// $data['first'] = 'Patrick';
		// $data['last'] = 'Thomas';
		
		// return view('pages.about', $data);
		
		// METHOD 3)
		//$first = 'Patrick';
		////$first = 'John';
		//$last = 'Thomas';
		
		//return view('pages.about', compact('first', 'last'));
		
		//return view('pages.about');
		
		// PASSING A [PEOPLE] VIEW
		// $people = [
			// 'George Orwell', 'Bobby Dylan', 'Gail Stream', 'Brice Price'
		// ];
		
		$people = [];
		
		return view('pages.about', compact('people'));
	}
	
	public function contact()
	{
		$first = 'Patrick';
		$last = 'Thomas';
		
		return view('pages.contact', compact('first', 'last'));
	}
	
	
}
