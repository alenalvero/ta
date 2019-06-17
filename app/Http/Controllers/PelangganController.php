<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PelangganController extends Controller
{
    public function daftar()
    {
        return view('customer.daftar');
    }

    public function proses_daftar(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'email' => 'required',
            'nama' => 'required',
            'password' => ' required|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect('/pelanggan/daftar')
                ->withErrors($validator)
                ->withInput();
        }

        $user_baru = new User;
        $user_baru->name = $r->nama;
        $user_baru->email = $r->email;
        $user_baru->password = Hash::make($r->password);
        $user_baru->type = "user";
        $user_baru->save();

        return redirect("/");
    }

    public function login()
    {
        return view('customer.login');
    }
}
