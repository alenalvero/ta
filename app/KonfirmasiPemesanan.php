<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KonfirmasiPemesanan extends Model
{
    public function pemesanan()
    {
        return $this->belongsTo('App\Pemesanan', 'id_pemesanan', 'id');
    }
}
