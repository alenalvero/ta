<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan_paket_tour extends Model
{
    protected $table = 'pemesanan_paket_tours';
    public $timestamps = true;

    public function paket_tour()
    {
    	return $this->belongsTo('App\Paket_tour','id_paket');
    }
    public function konfirmasi_pembayaran()
    {
    	return $this->hasOne('App\Konfirmasi_pembayaran', 'id_pemesanan_paket');
    }
    
}
