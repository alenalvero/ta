<?php

namespace App\Http\Controllers;

use App\Konfirmasi_pembayaran;
use App\Pemesanan_paket_tour;
use Illuminate\Http\Request;
use App\KonfirmasiPemesanan;
use App\Helpers\KirimEmail;

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
	{ }
	public function konfirmasi($id)
	{
		$view = view('customer.konfirmasi_pembayaran');
		$view->pemesanan_paket_tour = Pemesanan_paket_tour::findOrFail($id);
		$konfirmed = Pemesanan_paket_tour::whereHas('konfirmasi_pembayaran', function ($q) {
			$q->where('status', 1);
		})->sum('jumlah_orang');
		// dd($konfirmed);
		$view->konfirmed = $konfirmed;
		return $view;
	}


	public function update(Request $request)
	{
		$konfirmasi_pembayaran = new Konfirmasi_pembayaran;
		$konfirmasi_pembayaran->id_pemesanan_paket = $request->input('id_pemesanan_paket');
		$konfirmasi_pembayaran->foto = $request->input('foto');
		$konfirmasi_pembayaran->status = 1;
		$konfirmasi_pembayaran->save();

		return redirect('/');
	}

	public function destroy($id)
	{

		\DB::table('konfirmasi_pembayarans')->where('id', '=', $id)->delete();
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

	public function verifikasi(Request $r)
	{
		$konfirmasi_pembayaran = Konfirmasi_pembayaran::findOrFail($r->id);
		$konfirmasi_pembayaran->status = 1;
		$konfirmasi_pembayaran->save();
		return redirect('/operator/konfirmasi_pembayaran');
	}

	public function individu()
	{
		$data = [
			'konfirmasi_pembayaran' => KonfirmasiPemesanan::all()
		];

		return view('konfirmasi_pembayaran.individu', $data);
	}

	public function verifikasi_individu(Request $r)
	{
		$konfirmasi_pembayaran = KonfirmasiPemesanan::findOrFail($r->id);
		$konfirmasi_pembayaran->status = 1;
		$konfirmasi_pembayaran->save();

		$data = [
			'harga' => $konfirmasi_pembayaran->pemesanan->harga_total(),
			'nama' => $konfirmasi_pembayaran->pemesanan->nama_pelanggan
		];

		KirimEmail::kirim_ke($konfirmasi_pembayaran->pemesanan->user->email, $konfirmasi_pembayaran->pemesanan->user->name, 'Pembayaran Terkonfirmasi', 'email.pembayaran_terkonfirmasi', $data);

		return redirect()->back();
	}
}
