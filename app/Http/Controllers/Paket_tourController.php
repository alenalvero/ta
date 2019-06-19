<?php

namespace App\Http\Controllers;

use App\Paket_tour;
use Illuminate\Http\Request;

class Paket_tourController extends Controller
{


	public function index()
	{
		$per_page = 20;
		$paket_tour = Paket_tour::latest()->paginate($per_page);

		return view('paket_tour.index', compact('paket_tour'));

		// $view = view('paket_tour.index');
		// $view->paket_tour = Paket_tour::all();
		// return $view;

	}

	public function show($id)
	{
		$view = view('show');
		$view->paket_tour = Paket_tour::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$view = view('paket_tour.create');
		//$view->paket_tour = Paket_tour::findOrFail($id);
		return $view;
	}



	public function store(Request $request)
	{
		$paket_tour = "N";
		if ($request->hasFile('foto')); {
			$destination = "images";
			$foto = $request->file('foto');
			$foto->move($destination, $foto->getClientOriginalName());
			$paket_tour = "Y";
		}

		if ($paket_tour = "Y") {
			$paket_tour = new Paket_tour;
			$paket_tour->nama_tour = $request->input('nama_tour');
			$paket_tour->harga = $request->input('harga');
			$paket_tour->foto = $foto->getClientOriginalName();
			$paket_tour->keterangan = $request->input('keterangan');
			$paket_tour->save();
		}
		return redirect('operator/paket_tour');
	}

	public function edit($id)
	{
		$view = view('edit');
		$view->paket_tour = Paket_tour::findOrFail($id);
		return $view;
	}

	public function update(Request $request, $id)
	{
		$paket_tour = Paket_tour::findOrFail($id);
		$paket_tour->nama_tour = $request->input('nama_tour');
		$paket_tour->harga = $request->input('harga');
		$paket_tour->keterangan = $request->input('keterangan');
		$paket_tour->save();

		return redirect('operator/paket_tour');
	}

	public function destroy($id)
	{

		\DB::table('paket_tours')->where('id', '=', $id)->delete();
		\Session::flash('message', 'Data Berhasi Di Hapus');
		return \Redirect::to('operator/paket_tour');
	}

	public function sendMail()
	{
		$data = [
			'fullname' => 'alen',

		];
		\Mail::send(
			'email',
			$data,
			function ($message) {
				$message->to('alen@gmail.com')->subject('Coba email');
			}
		);

		echo "oke";
	}
}
