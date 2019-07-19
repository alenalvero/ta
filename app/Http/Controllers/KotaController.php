<?php

namespace App\Http\Controllers;

use App\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{


	public function index()
	{
		$per_page = 20;
		$kotas = Kota::latest()->paginate($per_page);

		return view('kota.index', compact('kotas'));
	}

	public function show($id)
	{
		$view = view('show');
		$view->bis = Kota::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$view = view('kota.create');
		//$view->bis = Bis::findOrFail($id);
		return $view;
	}



	public function store(Request $request)
	{
		$kota = new Kota;
		$kota->nama_kota = $request->input('nama_kota');
		$kota->provinsi = $request->input('provinsi');
		$kota->harga = $request->input('harga');
		$kota->save();

		return redirect('operator/kota');
	}

	public function edit($id)
	{
		$view = view('kota.edit');
		$view->kota = Kota::findOrFail($id);
		return $view;
	}

	public function update(Request $request, $id)
	{
		$kota = Kota::findOrFail($id);
		$kota->nama_kota = $request->input('nama_kota');
		$kota->provinsi = $request->input('provinsi');
		$kota->harga = $request->input('harga');
		$kota->save();

		return redirect('operator/kota');
	}

	public function destroy($id)
	{

		\DB::table('kotas')->where('id', '=', $id)->delete();
		\Session::flash('message', 'Data Berhasi Di Hapus');
		return \Redirect::to('operator/kota');
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
