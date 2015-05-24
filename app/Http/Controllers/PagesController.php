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
		// $data['first'] = 'Douglas';
		// $data['last'] = 'Quaid';
		
		// return view('pages.about', $data);
		
		// METHOD 3)
		// $first = 'Fox';
		// $last = 'Mulder';
		
		// return view('pages.about', compact('first', 'last'));
		
		
	}
	

}
