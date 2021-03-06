<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return 'hello world!';
		
		return view('welcome');
	}
	
	public function pages()
	{
		return view('pages');
	}
	
	public function contact()
	{
		return view('pages.contact');
	}
	
	public function about()
	{
		return view('about');
	}
	
	public function contact2()
	{
		return view('about.contact');
	}
}
