<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoPaket extends Model
{
    protected $table = 'promo_paket';
    public $timestamps = false;

    public function paket()
    {
        return $this->hasOne('App\Paket_tour', 'id', 'id_paket');
    }

    public function promo()
    {
        return $this->hasOne('App\Promo', 'id', 'id_promo');
    }
}
