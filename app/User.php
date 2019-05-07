<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pemesanan()
    {
        return $this->hasMany('App\Pemesanan', 'id_user', 'id');
    }
    public function pemesanan_paket_tour()
    {
        return $this->hasMany('App\Pemesanan_paket_tour', 'id_user', 'id');
    }
}
