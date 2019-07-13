<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoPemesananPaket extends Model
{
    protected $table = 'promo_pemesanan_paket';
    public $timestamps = false;

    public function promo()
    {
        return $this->hasOne('App\Promo', 'id', 'id_promo');
    }

    public function pemesanan_paket()
    {
        return $this->hasOne('App\Pemesanan_paket_tour', 'id_pemesanan_paket', 'id');
    }
}
