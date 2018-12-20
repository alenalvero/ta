<?php

namespace App\Http\Controllers;

use App\Tempat_wisata;
use App\Kota;
use DB;
use Illuminate\Http\Request;

class Tempat_wisataController extends Controller
{
    

	public function index()
	{
		$tempat_wisata = Tempat_wisata::with('kota')->get();
		$tempat_wisata = Tempat_wisata::latest()->paginate(7);
		// return $tempat_wisata;
		return view('tempat_wisata.index',compact('tempat_wisata'));
	}

	public function show($id)
	{
		$view = view('show');
		$view->tempat_wisata = Tempat_wisata::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$kotas = Kota::all();
		return view('tempat_wisata.create',compact('kotas'));
	}



	public function store (Request $request)
	{
		$tempat_wisata = new Tempat_wisata;
		$tempat_wisata->nama = $request->input('nama');
		$tempat_wisata->id_kota = $request->input('id_kota');
		$tempat_wisata->harga = $request->input('harga');
		$tempat_wisata->save();

		return $tempat_wisata;
	}

	public function edit( $id)
	{
		
		$tempat_wisata = Tempat_wisata::findOrFail($id);
		$kotas = Kota::all();
		
		return view('tempat_wisata.edit',compact('tempat_wisata','kotas'));

		//$view = view('tempat_wisata.edit');
		//$view->tempat_wisata= Tempat_wisata::findOrFail($id);
		//return $view;

		
	}
	
	public function update(Request $request, $id)
	{
		$tempat_wisata = Tempat_wisata::findOrFail($id);
		$tempat_wisata->nama = $request->input('nama');
		$tempat_wisata->id_kota = $request->input('id_kota');
		$tempat_wisata->harga = $request->input('harga');
		$tempat_wisata->save();

		return redirect('admin/tempat_wisata');
	}

	public function destroy($id)
	{

		\DB::table('tempat_wisatas')->where('id', '=', $id)->delete();
		\Session::flash('message','Data Berhasi Di Hapus');
		return \Redirect::to('admin/tempat_wisata');
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


