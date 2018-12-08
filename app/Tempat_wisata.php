<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat_wisata extends Model
{
    protected $table = 'tempat_wisatas';
    public $timestamps = false;

    public function kota()
    {
    	return $this->belongsTo('App\Kota','id_kota');
    }
}
