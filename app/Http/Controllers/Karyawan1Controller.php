<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan1;

class Karyawan1Controller extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = view('Karyawan1.index');
        $view->karyawan = Karyawan1::all();
        return $view;
    }

    public function show($id)
    {
     $view = view('show');
     $view->karyawan = Karyawan1::findOrFail($id);
     return $view;
    }

    public function create()
    {
     $view = view('Karyawan1.create');
    // $view->karyawan = Karyawan1::findOrFail($id);
     return $view;
    }



    public function store (Request $request)
    {
     $karyawan = new Karyawan1;
     $karyawan->nama = $request->input('nama');
     $karyawan->alamat = $request->input('alamat');
     $karyawan->telp = $request->input('telp');
     $karyawan->save();

     dd('dsdsadas');
    return redirect('karyawan1');
    }

    public function edit( $id)
    {
     $view = view('edit');
     $view->karyawan= Karyawan1::findOrFail($id);
     return $view;

        
    }
    
    public function update(Request $request, $id)
    {
     $karyawan = Karyawan1::findOrFail($id);
     $karyawan->nama = $request->input('nama');
     $karyawan->alamat = $request->input('alamat');
     $karyawan->telp = $request->input('telp');
     $karyawan->save();

     return $karyawan;
    }

    public function destroy($id)
    {

     \DB::table('karyawans')->where('id', '=', $id)->delete();
     \Session::flash('message','Data Berhasi Di Hapus');
     return \Redirect::to('karyawan1');
        
        
    }

    public function sendMail()
    {
     $data = [
                'fullname' => 'alen',
                
            ];
            \Mail::send('email', $data,
                function ($message) {
                    $message->to('alen@gmail.com')->subject('Coba email');
                }
            );

            echo "oke";
    }
}
