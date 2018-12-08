<?php

namespace App\Http\Controllers;

use App\Konfirmasi_pembayaran;
use Illuminate\Http\Request;

class Konfirmasi_pembayaranController extends Controller
{
    

	public function index()
	{
		$view = view('konfirmasi_pembayaran.index');
		$view->konfirmasi_pembayaran = Konfirmasi_pembayaran::all();
		return $view;

	}

	public function show($id)
	{
		$view = view('show');
		$view->konfirmasi_pembayaran = Konfirmasi_pembayaran::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$view = view('create');
		$view->konfirmasi_pembayaran = Konfirmasi_pembayaran::findOrFail($id);
		return $view;
	}



	public function store (Request $request)
	{
		$konfirmasi_pembayaran = new Konfirmasi_pembayaran;
		$konfirmasi_pembayaran->foto = $request->input('foto');
		$konfirmasi_pembayaran->status = $request->input('status');
		
		$konfirmasi_pembayaran->save();

		return $konfirmasi_pembayaran;
	}

	public function edit( $id)
	{
		$view = view('edit');
		$view->konfirmasi_pembayaran= Konfirmasi_pembayaran::findOrFail($id);
		return $view;

		
	}
	
	public function update(Request $request, $id)
	{
		$konfirmasi_pembayaran = Konfirmasi_pembayaran::findOrFail($id);
		$konfirmasi_pembayaran->foto = $request->input('foto');
		$konfirmasi_pembayaran->status = $request->input('status');
		$konfirmasi_pembayaran->save();

		return $konfirmasi_pembayaran;
	}

	public function destroy($id)
	{

		\DB::table('konfirmasi_pembayarans')->where('id', '=', $id)->delete();
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


