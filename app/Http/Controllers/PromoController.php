<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per_page = 20;

        $data = [
            'promos' => Promo::paginate($per_page),
            'sekarang' => Carbon::now()
        ];

        return view('promo.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama_promo' => 'required',
            'kode' => 'required|unique:promos',
            'start' => 'required',
            'expired' => 'required',
            'diskon_persen' => 'required',
            'maksimal_diskon' => 'required'
        ], [
            'kode.unique' => 'Kode sudah digunakan di promo lain'
        ]);

        if ($validation->fails()) {
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }

        $promo_baru = new Promo;
        $promo_baru->nama_promo = $request->nama_promo;
        $promo_baru->kode = $request->kode;
        $promo_baru->start = Carbon::createFromFormat('d/m/Y', $request->start);
        $promo_baru->expired = Carbon::createFromFormat('d/m/Y', $request->expired);
        $promo_baru->diskon_persen = $request->diskon_persen;
        $promo_baru->maksimal_diskon = $request->maksimal_diskon;
        $promo_baru->save();

        return redirect()->route('promo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'promo' => Promo::findOrFail($id)
        ];

        return view('promo.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'nama_promo' => 'required',
            'kode' => 'required|unique:promos,kode,' . $id,
            'start' => 'required',
            'expired' => 'required',
            'diskon_persen' => 'required',
            'maksimal_diskon' => 'required'
        ], [
            'kode.unique' => 'Kode sudah digunakan di promo lain'
        ]);

        if ($validation->fails()) {
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }

        $promo = Promo::find($id);
        $promo->nama_promo = $request->nama_promo;
        $promo->kode = $request->kode;
        $promo->start = Carbon::createFromFormat('d/m/Y', $request->start);
        $promo->expired = Carbon::createFromFormat('d/m/Y', $request->expired);
        $promo->diskon_persen = $request->diskon_persen;
        $promo->maksimal_diskon = $request->maksimal_diskon;
        $promo->save();

        return redirect()->route('promo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return redirect()->route('promo.index');
    }
}
