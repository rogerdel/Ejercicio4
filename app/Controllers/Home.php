<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		session_start();
		return view('header').view('welcome');
	}


}
