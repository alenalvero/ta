<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan_paket_tour extends Model
{
    protected $table = 'pemesanan_paket_tours';
    public $timestamps = true;

    public function paket_tour()
    {
        return $this->belongsTo('App\Paket_tour', 'id_paket');
    }
    public function konfirmasi_pembayaran()
    {
        return $this->hasOne('App\Konfirmasi_pembayaran', 'id_pemesanan_paket');
    }

    public function promo_paket()
    {
        return $this->hasOne('App\PromoPaket', 'id_promo', 'id');
    }

    public function promo_pemesanan_tour()
    {
        return $this->hasOne('App\PromoPemesananPaket', 'id_pemesanan_paket', 'id');
    }

    public function getDiskonAttribute()
    {
        if (is_null($this->promo_pemesanan_tour)) {
            return 0;
        }
        $harga = $this->paket_tour->harga;
        $persen = $this->promo_pemesanan_tour->promo->diskon_persen;
        $maksimal_diskon = $this->promo_pemesanan_tour->promo->maksimal_diskon;

        $diskon = $harga * $persen / 100;
        if ($diskon < $maksimal_diskon) {
            return $diskon;
        } else {
            return $maksimal_diskon;
        }
    }
}
