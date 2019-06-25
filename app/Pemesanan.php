<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

	public function harga_total()
	{
		$harga_total = 0;

		// hitung kota
		$kota = Kota::find($this->id_kota);
		$harga_total = $harga_total + $kota->harga;

		// hitung wisata
		foreach ($this->detail_pemesanan as $pemesanan) {
			$harga_total = $harga_total + $pemesanan->wisata->harga;
		}

		//hitung bis
		$jumlah_bis = 1;
		if ($this->jumlah_orang > 30 && $this->jumlah_orang <= 60) {
			$harga_total = $harga_total + $this->bis->harga_large;
		} else if ($this->jumlah_orang <= 30) {
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
		$terkonfirmasi = KonfirmasiPemesanan::where('id_pemesanan', $this->id)->first();
		if (!is_null($terkonfirmasi)) {
			return true;
		}

		return false;
	}
}
