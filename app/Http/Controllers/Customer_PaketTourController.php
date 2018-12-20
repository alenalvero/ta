<?php

namespace App\Http\Controllers;

use App\Paket_tour;
use Illuminate\Http\Request;

class Customer_PaketTourController extends Controller
{
    public function index()
	{
		
		$view = view('customer.customer_PaketTour');
		$view->paket_tour = Paket_tour::all();
		return $view;
	}

}
