<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    

	public function index()
	{
		$pelanggan = Pelanggan::all();
		$pelanggan = Pelanggan::latest()->paginate(3);
		
		return view('pelanggan.index', compact('pelanggan'));
	}

	public function show($id)
	{
		$view = view('show');
		$view->pelanggan = Pelanggan::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$view = view('create');
		$view->pelanggan = Pelanggan::findOrFail($id);
		return $view;
	}



	public function store (Request $request)
	{
		$pelanggan = new Pelanggan;
		$pelanggan->nama = $request->input('nama');
		$pelanggan->alamat = $request->input('alamat');
		$pelanggan->telp = $request->input('telp');
		$pelanggan->email = $request->input('email');
		$pelanggan->keterangan = $request->input('keterangan');
		$pelanggan->save();

		return $pelanggan;
	}

	public function edit( $id)
	{
		$view = view('edit');
		$view->pelanggan= Pelanggan::findOrFail($id);
		return $view;

		
	}
	
	public function update(Request $request, $id)
	{
		$pelanggan = Pelanggan::findOrFail($id);
		$pelanggan->nama = $request->input('nama');
		$pelanggan->alamat = $request->input('alamat');
		$pelanggan->telp = $request->input('telp');
		$pelanggan->emaill = $request->input('email');
		$pelanggan->keterangan = $request->input('keterangan');
		$pelanggan->save();

		return $pelanggan;
	}

	public function destroy($id)
	{

		\DB::table('pelanggans')->where('id', '=', $id)->delete();
		\Session::flash('message','Data Berhasi Di Hapus');
		return \Redirect::to('pelanggan');
		
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


