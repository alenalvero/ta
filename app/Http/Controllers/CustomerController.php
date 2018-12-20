<?php

namespace App\Http\Controllers;

use App\Paket_tour;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
	{
		
		$view = view('customer.index');
		$view->paket_tour = Paket_tour::all();
		return $view;
	}

}
