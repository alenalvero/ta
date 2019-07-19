<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    public $timestamps = false;
    protected $dates = [
        'tgl'
    ];

    public function pemesanan()
    {
        $this->hasOne('App\Pemesanan', 'id', 'id_pemesanan');
    }
}
