<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pemesanan extends Model
{
	protected $table = 'pemesanans';
	// public $timestamps = false;

	public function detail_pemesanan()
	{
		return $this->hasMany('App\DetailPemesanan', 'id_pemesanan', 'id');
	}

	public function konfirmasi_pemesanan()
	{
		return $this->hasOne('App\KonfirmasiPemesanan', 'id_pemesanan', 'id');
	}

	public function kota()
	{
		return $this->hasOne('App\Kota', 'id', 'id_kota');
	}

	public function bis()
	{
		return $this->hasOne('App\Bis', 'id', 'id_bis');
	}

	public function user()
	{
		return $this->hasOne('App\User', 'id', 'id_user');
	}

	public function mobil()
	{
		return $this->hasOne('App\Mobil', 'id', 'id_mobil');
	}

	public function hotel()
	{
		return $this->hasOne('App\Hotel', 'id', 'id_hotel');
	}

	public function harga_total()
	{
		$harga_total = 0;

		//hitung harga
		$harga_total = $harga_total + $this->hotel->harga;

		// hitung kota
		$harga_total = $harga_total + $this->harga_kota();

		// hitung wisata
		$harga_total = $harga_total + $this->harga_total_wisata();

		//hitung bis
		$harga_total = $harga_total + $this->harga_total_kendaraan();

		return $harga_total * $this->jumlah_hari;
	}

	public function harga_kota()
	{
		$kota = Kota::find($this->id_kota);
		return $kota->harga;
	}

	public function harga_total_wisata()
	{
		$total = 0;
		foreach ($this->detail_pemesanan as $pemesanan) {
			$total = $total + $pemesanan->wisata->harga;
		}

		return $total;
	}

	public function harga_total_kendaraan()
	{
		$harga_total = 0;
		$jumlah_bis = 1;
		/* if ($this->bis == null and $this->mobil == null) {
			return 0;
		} */
		if ($this->jumlah_orang <= 10) {
			$harga_total = $harga_total + $this->mobil->harga_mobil;
		} else if ($this->jumlah_orang > 30 && $this->jumlah_orang <= 60) {
			$harga_total = $harga_total + $this->bis->harga_large;
		} else if ($this->jumlah_orang <= 30 && $this->jumlah_orang > 10) {
			$harga_total = $harga_total + $this->bis->harga_small;
		} else {
			$sisa = $this->jumlah_orang % 60;
			if ($sisa <= 30) {
				$jumlah_bis = floor($this->jumlah_orang / 60);
				$harga_bis = $this->bis->harga_large * $jumlah_bis;
				$harga_bis = $harga_bis + $this->bis->harga_small;
				$harga_total = $harga_total + $harga_bis;
			} else {
				$jumlah_bis = ceil($this->jumlah_orang / 60);
				$harga_bis = $this->bis->harga_large * $jumlah_bis;
				$harga_total = $harga_total + $harga_bis;
			}
		}

		return $harga_total;
	}

	public function sudah_dibayar()
	{
		$terkonfirmasi = KonfirmasiPemesanan::where([
			'id_pemesanan' => $this->id,
			'status' => 1
		])->first();
		if (!is_null($terkonfirmasi)) {
			return true;
		}

		return false;
	}

	public function getSudahDibayarAttribute()
	{
		$terkonfirmasi = KonfirmasiPemesanan::where([
			'id_pemesanan' => $this->id,
			'status' => 1
		])->first();
		if (!is_null($terkonfirmasi)) {
			return true;
		}

		return false;
	}

	public function getJumlahHariAttribute()
	{
		$tgl1 = Carbon::parse($this->tgl);
		$tgl2 = Carbon::parse($this->tgl2);


		return $tgl1->diff($tgl2)->days;
	}

	public function getStatusPembayaranAttribute()
	{
		if ($this->konfirmasi_pemesanan != null) {
			if ($this->konfirmasi_pemesanan->status == 2) {
				return "Belum dikonfirmasi";
			} else if ($this->konfirmasi_pemesanan->status == 1) {
				return "Terkonfirmasi";
			}
		} else {
			return "Belum dibayarkan";
		}
	}
}
