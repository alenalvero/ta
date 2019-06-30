<?php

namespace App\Http\Controllers;

use App\Pemesanan;
use App\Bis;
use Illuminate\Http\Request;
use App\Kota;
use App\Tempat_wisata;
use App\Helpers\KirimEmail;
use App\DetailPemesanan;
use App\Mobil;

class PemesananController extends Controller
{


	public function index()
	{
		$view = view('pemesanan.index');
		$view->pemesanan = Pemesanan::all();
		return $view;
	}

	public function show($id)
	{
		$view = view('show');
		$view->pemesanan = Pemesanan::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$view = view('create');
		$view->pemesanan = Pemesanan::findOrFail($id);
		return $view;
	}



	public function store(Request $request)
	{
		$pemesanan = new Pemesanan;
		$pemesanan->id_pelanggan = $request->input('id_pelanggan');
		$pemesanan->id_karyawan = $request->input('id_karyawan');
		$pemesanan->tgl_pesan = $request->input('tgl_pesan');
		$pemesanan->status = $request->input('status');
		$pemesanan->save();

		return $pemesanan;
	}

	public function edit($id)
	{
		$view = view('pemesanan.edit');
		$view->pemesanan = Pemesanan::findOrFail($id);

		if ($view->pemesanan->jumlah_orang > 10) {
			$view->bis = Bis::all();
		} else {
			$view->mobil = Mobil::all();
		}
		return $view;
	}

	public function update(Request $request, $id)
	{
		$pemesanan = Pemesanan::findOrFail($id);
		$is_bis = false;
		if ($request->id_bis != null) {
			$pemesanan->id_bis = $request->input('id_bis');
			$is_bis = true;
		} else {
			$pemesanan->id_mobil = $request->input('id_mobil');
		}
		$pemesanan->save();

		if ($is_bis) {
			$bis = Bis::find($pemesanan->id_bis);
			$kendaraan = $bis->nama_po;
		} else {
			$mobil = Mobil::find($pemesanan->id_mobil);
			$kendaraan = $mobil->nama_mobil;
		}

		$email = $pemesanan->user->email;
		$nama = $pemesanan->user->name;
		$data = [
			'email' => $email,
			'nama' => $nama,
			'nama_po' => $kendaraan,
			'harga' => $pemesanan->harga_total(),
			'kota' => Kota::find($pemesanan->id_kota)->nama_kota,
			'tujuan' => $pemesanan->detail_pemesanan
		];

		KirimEmail::kirim_ke($email, $nama, 'Pemesanan terkonfirmasi', 'email.pesanan_terkonfirmasi', $data);

		return redirect('/operator/pemesanan');
	}

	public function destroy($id)
	{

		\DB::table('pemasanans')->where('id', '=', $id)->delete();
		\Session::flash('message', 'Data Berhasi Di Hapus');
		echo "oke";
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
