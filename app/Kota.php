<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kotas';
    public $timestamps = false;

    public function tempat_wisata()
    {
        return $this->hasMany('App\Tempat_wisata', 'id_kota', 'id');
    }
}
