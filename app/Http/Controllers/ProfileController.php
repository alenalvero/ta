<?php

namespace App\Http\Controllers;

use App\Pemesanan_paket_tour;
use App\Pemesanan;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
	{
		$user =	 User::where('id', auth()->user()->id)->first();
		// $data= [
		// 	'profile'=>$user->pemesanan,
		// 	'profile1'=>$user->pemesanan_paket_tour,
		// ];
		
		// return view('customer.profile',$data);
		$profile1 = Pemesanan_paket_tour::all();
		$profile = Pemesanan::all();
		$profile1 = Pemesanan_paket_tour::latest()->paginate(5);
		$profile = Pemesanan::latest()->paginate(5);


		return view('customer.profile', compact('profile1','profile'));

		// $biss = Bis::all();
		// $biss = Bis::latest()->paginate(5);
		
		// return view('bis.index', compact('biss'));
	}


}
