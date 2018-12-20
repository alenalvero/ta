<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
	{
		
		$view = view('customer.about');
		
		return $view;
	}
}
