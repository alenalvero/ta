<?php

namespace App\Http\Controllers;

use App\Trayek;
use App\Kota;
use App\Tempat_wisata;
use Illuminate\Http\Request;

class TrayekController extends Controller
{
    

	public function index()
	{
		$trayek = Trayek::with('kota')->get();
		$trayek = Trayek::with('tempat_wisata')->get();
		$trayek = trayek::latest()->paginate(7);
		// return $tempat_wisata;
		return view('trayek.index',compact('trayek'));



		$view = view('trayek.index');
		$view->trayek = Trayek::all();
		return $view;

	}

	public function show($id)
	{
		$view = view('show');
		$view->trayek = Trayek::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$kotas = Kota::all();
		return view('trayek.create',compact('kotas'));
	}



	public function store (Request $request)
	{
		$trayek = new Trayek;
		$trayek->asal = $request->input('asal');
		$trayek->id_kota = $request->input('id_kota');
		$trayek->id_tempat_wisata = $request->input('id_tempat_wisata');
		$trayek->save();

		return redirect('trayek');
	}

	public function edit( $id)
	{
		
		


		$trayek = Trayek::findOrFail($id);
		$kotas = Kota::all();
		$tempat_wisata = Tempat_wisata::where('id_kota', $trayek->id_kota)->get();

		return view('trayek.edit',compact('trayek','kotas','tempat_wisata'));


		//$view = view('edit');
		//$view->trayek= Trayek::findOrFail($id);
		//return $view;

		
	}
	
	public function update(Request $request, $id)
	{
		$trayek = Trayek::findOrFail($id);
		$trayek->asal = $request->input('asal');
		$trayek->id_kota = $request->input('id_kota');
		$trayek->id_tempat_wisata = $request->input('id_tempat_wisata');
		$trayek->save();

		return redirect('trayek');
	}

	public function destroy($id)
	{

		\DB::table('trayeks')->where('id', '=', $id)->delete();
		\Session::flash('message','Data Berhasi Di Hapus');
		return \Redirect::to('trayek');
		
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

	public function get_wisata($id)
	{
		$data = Tempat_wisata::where('id_kota', $id)->get();
		return response()->json($data);
	}

}


