<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Promo extends Model
{
    protected $table = 'promos';
    public $timestamps = false;
    protected $dates = [
        'start',
        'expired'
    ];

    public function getIsActiveAttribute()
    {
        $sekarang = Carbon::now();
        if ($sekarang >= $this->start && $sekarang <= $this->expired) {
            return true;
        }

        return false;
    }
}
