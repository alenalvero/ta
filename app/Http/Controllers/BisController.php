<?php

namespace App\Http\Controllers;

use App\Bis;
use Illuminate\Http\Request;

class BisController extends Controller
{


	public function index()
	{
		$per_page = 20;
		$biss = Bis::latest()->paginate($per_page);

		return view('bis.index', compact('biss'));
	}

	public function show($id)
	{
		$view = view('show');
		$view->bis = Bis::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$view = view('bis.create');
		//$view->bis = Bis::findOrFail($id);
		return $view;
	}



	public function store(Request $request)
	{
		$bis = new Bis;
		$bis->harga_small = $request->input('harga_small');
		$bis->nama_po = $request->input('nama_po');
		$bis->harga_large = $request->input('harga_large');
		$bis->save();

		return redirect('operator/bis');
	}

	public function edit($id)
	{
		$view = view('bis.edit');
		$view->bis = Bis::findOrFail($id);
		return $view;
	}

	public function update(Request $request, $id)
	{
		$bis = Bis::findOrFail($id);
		$bis->harga_small = $request->input('harga_small');
		$bis->nama_po = $request->input('nama_po');
		$bis->harga_large = $request->input('harga_large');
		$bis->save();

		return redirect('operator/bis');
	}

	public function destroy($id)
	{

		\DB::table('biss')->where('id', '=', $id)->delete();
		\Session::flash('message', 'Data Berhasi Di Hapus');
		return \Redirect::to('operator/bis');
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
