<?php

namespace App\Http\Controllers;

use App\Paket_tour;
use App\Kota;
use App\Tempat_wisata;
use App\Customer;
use App\Trayek;
use App\Pemesanan_paket_tour;
use App\Pemesanan;
use App\DetailPemesanan;
use App\User;
use Illuminate\Http\Request;
use App\KonfirmasiPemesanan;
use Carbon\Carbon;
use PDF;

class CustomerController extends Controller
{
	public function index()
	{
		$customer = Customer::with('kota')->get();
		$customer = Customer::with('tempat_wisata')->get();
		$kotas = Kota::all();

		return view('customer.index', compact('customer', 'kotas'));


		$view = view('customer.index');
		$view->paket_tour = Paket_tour::all();
		return $view;
	}

	public function create(Request $request)
	{
		$data = $request->all();
		// return $data;
		$pemesanan = new Pemesanan;
		$pemesanan->id_user = auth()->user()->id;
		$pemesanan->tgl = $request->input('tgl');
		$pemesanan->jumlah_orang = $request->input('jumlah_orang');
		$pemesanan->id_kota = $request->input('id_kota');
		$pemesanan->save();

		foreach ($data['id_tempat_wisata'] as $detail_wisata) {
			$detailpemesanan = new DetailPemesanan;
			$detailpemesanan->id_pemesanan = $pemesanan->id;
			$detailpemesanan->id_wisata = $detail_wisata;
			$detailpemesanan->save();
		}

		return redirect('/');
	}
	public function pesan($id)
	{
		$view = view('customer.form_input_paket');
		$view->paket_tour = Paket_tour::findOrFail($id);
		return $view;
	}

	public function store(Request $request)
	{
		$pemesanan_paket_tour = new Pemesanan_paket_tour;
		$pemesanan_paket_tour->id_user = $request->input('id_user');
		$pemesanan_paket_tour->nama_pelanggan_paket = $request->input('nama_pelanggan_paket');
		$pemesanan_paket_tour->alamat = $request->input('alamat');
		$pemesanan_paket_tour->id_paket = $request->input('id_paket');
		$pemesanan_paket_tour->tgl = $request->input('tgl');

		$pemesanan_paket_tour->save();

		$data = [
			'nama_pelanggan_paket' => $request->nama_pelanggan_paket,
			'alamat' => $request->alamat,
			'tanggal' => $request->tgl,
			'id_paket' => $request->id_paket

		];

		$list_operator = User::where('type', 'operator')->get();
		dd($list_operator);
		foreach ($list_operator as $list) {
			\Mail::send(
				'email',
				$data,
				function ($message) {
					$message->to($list->email)->subject('Coba email');
				}
			);
		}


		echo "oke";
		/*

		$pemesanan_detail = new Pemesanan_detail;
		$pemesanan_detail->id_pemesanan = $pemesanan_paket_tour->id;
		$pemesanan_detail->id_wisata = 
*/
		return redirect('/profile');
	}

	public function upload_struk($id)
	{
		$pemesanan = Pemesanan::find($id);
		$data = [
			'id' => $id,
			'pemesanan' => $pemesanan
		];

		return view('customer.upload_struk', $data);
	}

	public function proses_upload_struk(Request $r)
	{
		$path = $r->file('foto')->store('struk', ['disk' => 'public']);

		$konfirmasi_pemesanan = KonfirmasiPemesanan::where('id_pemesanan', $r->input('id_pemesanan'))->first();
		if (is_null($konfirmasi_pemesanan)) {
			$konfirmasi_pemesanan = new KonfirmasiPemesanan;
		}

		$konfirmasi_pemesanan->id_pemesanan = $r->input('id_pemesanan');
		$konfirmasi_pemesanan->foto = $path;
		$konfirmasi_pemesanan->status = 2;
		$konfirmasi_pemesanan->save();

		$pemesanan = Pemesanan::find($r->id_pemesanan);
		$pemesanan->nama_pelanggan = $r->nama_pelanggan;
		$pemesanan->alamat = $r->alamat_penjemputan;
		$pemesanan->no_telp = $r->no_telp;
		$pemesanan->save();

		return redirect()->refresh();
	}

	public function cetak_struk($id)
	{
		$pembayaran = KonfirmasiPemesanan::where([
			'id_pemesanan' => $id,
			'status' => 1
		])->get();
		if ($pembayaran == null) {
			return abort(404);
		}

		$pemesanan = Pemesanan::findOrFail($id);

		$data = [
			'id' => $id,
			'pemesanan' => $pemesanan
		];

		$pdf = PDF::loadView('customer.struk', $data);
		return $pdf->stream('struk.pdf');
	}
}
