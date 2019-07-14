<?php

namespace App\Http\Controllers;

use App\Pemesanan;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Pemesanan_paket_tour;

class RekapController extends Controller
{
    private $bulans = [
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasil = Pemesanan::select(DB::raw('YEAR(created_at) as thn'))->groupBy('thn')->get();
        $data = [
            'bulans' => $this->bulans,
            'tahuns' => $hasil
        ];

        return view('rekap.index', $data);
    }

    public function cetak_bulan(Request $r)
    {
        setLocale(LC_TIME, 'id');
        if ($r->jenis_pemesanan == 1) {
            $rekap = Pemesanan::whereMonth('created_at', $r->bulan + 1)
                ->whereYear('created_at', $r->tahun)
                ->whereHas('konfirmasi_pemesanan', function ($q) {
                    $q->where('status', 1);
                })
                ->get();
        } else {
            $rekap = Pemesanan_paket_tour::whereMonth('created_at', $r->bulan + 1)
                ->whereYear('created_at', $r->tahun)
                ->whereHas('konfirmasi_pembayaran', function ($q) {
                    $q->where('status', 1);
                })
                ->get();
        }

        $data = [
            'bulan_angkah' => $r->bulan,
            'bulan_terpilih' => $this->bulans[$r->bulan],
            'tahun_terpilih' => $r->tahun,
            'bulan' => $this->bulans[$r->bulan],
            'data_rekap' => $rekap,
            'total_rekap' => 0,
            'is_paket' => $r->jenis_pemesanan == 1 ? false : true
        ];

        // return view('rekap.per_bulan', $data);
        $pdf = PDF::loadView('rekap.per_bulan', $data);
        return $pdf->stream('Rekap Bulan ' . $data['bulan_terpilih']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
