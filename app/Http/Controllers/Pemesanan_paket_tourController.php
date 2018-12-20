<?php

namespace App\Http\Controllers;

use App\Pemesanan_paket_tour;
use Illuminate\Http\Request;

class Pemesanan_paket_tourController extends Controller
{
    

	public function index()
	{
		$view = view('pemesanan_paket_tour.index');
		$view->pemesanan_paket_tour = Pemesanan_paket_tour::all();
		return $view;

	}

	public function show($id)
	{
		$view = view('show');
		$view->pemesanan_paket_tour = Pemesanan_paket_tour::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$view = view('create');
		$view->pemesanan_paket_tour = Pemesanan_paket_tour::findOrFail($id);
		return $view;
	}



	public function store (Request $request)
	{
		$pemesanan_paket_tour = new Pemesanan_paket_tour;
		$pemesanan_paket_tour->id_pelanggan = $request->input('id_pelanggan');
		$pemesanan_paket_tour->id_karyawan = $request->input('id_karyawan');
		$pemesanan_paket_tour->tgl_pesan = $request->input('tgl_pesan');
		$pemesanan_paket_tour->status = $request->input('status');
		$pemesanan_paket_tour->save();

		return $pemesanan_paket_tour;
	}

	public function edit( $id)
	{
		$view = view('edit');
		$view->pemesanan_paket_tour= Pemesanan_paket_tour::findOrFail($id);
		return $view;

		
	}
	
	public function update(Request $request, $id)
	{
		$pemesanan_paket_tour = Pemesanan_paket_tour::findOrFail($id);
		$pemesanan_paket_tour->id_pelanggan = $request->input('id_pelanggan');
		$pemesanan_paket_tour->id_karyawan = $request->input('id_karyawan');
		$pemesanan_paket_tour->tgl_pesan = $request->input('tgl_pesan');
		$pemesanan_paket_tour->status = $request->input('status');
		$pemesanan_paket_tour->save();

		return $pemesanan_paket_tour;
	}

	public function destroy($id)
	{

		\DB::table('pemesanan_paket_tours')->where('id', '=', $id)->delete();
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


