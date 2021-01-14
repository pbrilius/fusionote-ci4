<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

	public function dashboard()
	{
		return view('home/dashboard', [
			'url' => site_url('Home::dashboard'),
			'title' => 'Home',
			'metaTitle' => 'Dashboard',
			'type' => 'Web page',
			'image' => site_url('/favicon.ico')
		]);
	}
}
