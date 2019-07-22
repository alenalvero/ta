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
		// dd($promos->first()->promo_paket_tour->first()->paket);

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
		if ($request->kode_promo != null) {
			$cek_promo = PromoPaket::whereHas('promo', function ($q) use ($request, $sekarang) {
				$q->where('kode', $request->kode_promo)
					->where('start', '<=', $sekarang)
					->where('expired', '>=', $sekarang);
			})->where('id_paket', $request->id_paket)->first();

			if (is_null($cek_promo)) {
				return redirect()->back()->withInput()->with('promo_invalid', 'Promo tidak valid untuk paket ini / belum bisa digunakan, silakan cek tanggal berlaku kode.');
			}
		}

		$pemesanan_paket_tour = new Pemesanan_paket_tour;
		$pemesanan_paket_tour->id_user = auth()->user()->id;
		$pemesanan_paket_tour->nama_pelanggan_paket = $request->input('nama_pelanggan_paket');
		$pemesanan_paket_tour->alamat = $request->input('alamat');
		$pemesanan_paket_tour->no_telp = $request->input('no_telp');
		$pemesanan_paket_tour->id_paket = $request->input('id_paket');
		$pemesanan_paket_tour->alamat = $request->input('alamat');
		$pemesanan_paket_tour->jumlah_orang = $request->jumlah_orang;
		$pemesanan_paket_tour->save();

		if ($request->kode_prom != null) {
			$promo_pemesanan_paket = new PromoPemesananPaket;
			$promo_pemesanan_paket->id_promo = $cek_promo->id_promo;
			$promo_pemesanan_paket->id_pemesanan_paket = $pemesanan_paket_tour->id;
			$promo_pemesanan_paket->save();
		}

		return redirect('/profile');
	}
}
