<?php

namespace App\Http\Controllers;

use App\Paket_tour;
use Illuminate\Http\Request;

class Paket_tourController extends Controller
{
    

	public function index()
	{
		$view = view('paket_tour.index');
		$view->paket_tour = Paket_tour::all();
		return $view;

	}

	public function show($id)
	{
		$view = view('show');
		$view->paket_tour = Paket_tour::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$view = view('create');
		$view->paket_tour = Paket_tour::findOrFail($id);
		return $view;
	}



	public function store (Request $request)
	{
		$paket_tour = new Paket_tour;
		$paket_tour->nama_tour = $request->input('nama_tour');
		$paket_tour->harga = $request->input('harga');
		$paket_tour->keterangan = $request->input('keterangan');
		$paket_tour->save();

		return $paket_tour;
	}

	public function edit( $id)
	{
		$view = view('edit');
		$view->paket_tour= Paket_tour::findOrFail($id);
		return $view;

		
	}
	
	public function update(Request $request, $id)
	{
		$paket_tour = Paket_tour::findOrFail($id);
		$paket_tour->nama_tour = $request->input('nama_tour');
		$paket_tour->harga = $request->input('harga');
		$paket_tour->keterangan = $request->input('keterangan');
		$paket_tour->save();

		return $paket_tour;
	}

	public function destroy($id)
	{

		\DB::table('paket_tours')->where('id', '=', $id)->delete();
		\Session::flash('message','Data Berhasi Di Hapus');
		echo "oke";
		
	}

	public function sendMail()
	{
		$data = [
                'fullname' => 'alen',
                
            ];
            \Mail::send('email', $data,
                function ($message) {
                    $message->to('alen@gmail.com')->subject('Coba email');
                }
            );

            echo "oke";
	}

}


