<?php

namespace App\Http\Controllers;

use App\Paket_tour;
use App\Pemesanan_paket_tour;
use App\User;
use Illuminate\Http\Request;
use App\Promo;
use Illuminate\Support\Carbon;
use App\PromoPaket;
use App\PromoPemesananPaket;

class Customer_PaketTourController extends Controller
{
	public function index()
	{

		// $view = view('customer.customer_PaketTour');
		// $view->paket_tour = Paket_tour::all();
		// return $view;

		$customer_PaketTour = Paket_tour::latest()->paginate(6);
		$sekarang = Carbon::now();
		$promos = Promo::where('expired', '>', $sekarang)->get();

		return view('customer.customer_PaketTour', compact('customer_PaketTour', 'promos'));
	}
	public function detail($id)
	{
		$view = view('customer.detail_paket');
		$view->paket_tour = Paket_tour::findOrFail($id);
		return $view;
	}

	public function edit($id)
	{
		$view = view('customer.form_input_paket');
		$view->paket_tour = Paket_tour::findOrFail($id);
		return $view;
	}

	public function store(Request $request)
	{
		$sekarang = Carbon::now();
		$cek_promo = PromoPaket::whereHas('promo', function ($q) use ($request, $sekarang) {
			$q->where('kode', $request->kode_promo)
				->where('start', '<=', $sekarang)
				->where('expired', '>=', $sekarang);
		})->where('id_paket', $request->id_paket)->first();

		if (is_null($cek_promo)) {
			return redirect()->back()->withInput()->with('promo_invalid', 'Promo tidak valid untuk paket ini / belum bisa digunakan, silakan cek tanggal berlaku kode.');
		}

		$pemesanan_paket_tour = new Pemesanan_paket_tour;
		$pemesanan_paket_tour->id_user = auth()->user()->id;
		$pemesanan_paket_tour->nama_pelanggan_paket = $request->input('nama_pelanggan_paket');
		$pemesanan_paket_tour->alamat = $request->input('alamat');
		$pemesanan_paket_tour->no_telp = $request->input('no_telp');
		$pemesanan_paket_tour->id_paket = $request->input('id_paket');
		$pemesanan_paket_tour->alamat = $request->input('alamat');
		$pemesanan_paket_tour->tgl = $request->input('tgl');
		// $pemesanan_paket_tour->tgl2 = $request->input('tgl2');
		$pemesanan_paket_tour->save();

		$promo_pemesanan_paket = new PromoPemesananPaket;
		$promo_pemesanan_paket->id_promo = $cek_promo->id_promo;
		$promo_pemesanan_paket->id_pemesanan_paket = $pemesanan_paket_tour->id;
		$promo_pemesanan_paket->save();


		/* $data = [
			'nama' => $request->nama_pelanggan_paket,
			'alamat' => $request->alamat,
			'tanggal' => $request->tgl,
			'id_paket' => $request->id_paket

		];

		$list_operator = User::where('type', 'operator')->get();

		foreach ($list_operator as $list) {
			\Mail::send(
				'email',
				$data,
				function ($message) use ($list) {
					$message->to($list->email)->subject('Pemesanan Warok Tour');
				}
			);
		}

		echo "oke"; */
		return redirect('/profile');
	}
}
