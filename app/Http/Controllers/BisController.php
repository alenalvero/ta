<?php

namespace App\Http\Controllers;

use App\Bis;
use Illuminate\Http\Request;

class BisController extends Controller
{
    

	public function index()
	{
		$biss = Bis::all();
		$biss = Bis::latest()->paginate(2);
		
		return view('bis.index', compact('biss'));
	}

	public function show($id)
	{
		$view = view('show');
		$view->bis = Bis::findOrFail($id);
		return $view;
	}

	public function create()
	{
		$view = view('bis.create');
		//$view->bis = Bis::findOrFail($id);
		return $view;
	}



	public function store (Request $request)
	{
		$bis = new Bis;
		$bis->jenis_bis = $request->input('jenis_bis');
		$bis->nama_po = $request->input('nama_po');
		$bis->harga = $request->input('harga');
		$bis->save();

		return redirect('admin/bis');
	}

	public function edit( $id)
	{
		$view = view('bis.edit');
		$view->bis= Bis::findOrFail($id);
		return $view;

		
	}
	
	public function update(Request $request, $id)
	{
		$bis = Bis::findOrFail($id);
		$bis->jenis_bis = $request->input('jenis_bis');
		$bis->nama_po = $request->input('nama_po');
		$bis->harga = $request->input('harga');
		$bis->save();

		return redirect('admin/bis');
	}

	public function destroy($id)
	{

		\DB::table('biss')->where('id', '=', $id)->delete();
		\Session::flash('message','Data Berhasi Di Hapus');
		return \Redirect::to('admin/bis');
		
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


