<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trayek extends Model
{
    protected $table = 'trayeks';
    public $timestamps = false;

    public function kota()
    {
    	return $this->belongsTo('App\Kota', 'id_kota', 'id');
    }

    public function tempat_wisata()
    {
        return $this->belongsTo('App\Tempat_wisata', 'id_tempat_wisata', 'id');
    }

    public function wisata()
    {
    	return $this->belongsTo('App\Tempat_wisata', 'id_tempat_wisata', 'id');
    }
}
