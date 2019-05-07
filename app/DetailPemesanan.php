<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    public function wisata()
    {
    	return $this->hasOne('App\Tempat_wisata', 'id', 'id_wisata');
    }
}
