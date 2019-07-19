<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use App\Review;
use Carbon\Carbon;

class ReviewController extends Controller
{
    public function index()
    {
        $data = [
            'reviews' => Review::paginate(20)
        ];
        return view('review.index', $data);
    }

    public function review($id)
    {
        $data = [
            'pemesanan' => Pemesanan::findOrFail($id),
            'id' => $id
        ];
        return view('review.tambah', $data);
    }

    public function store(Request $r)
    {
        $review = new Review;
        $review->id_pemesanan = $r->id_pemesanan;
        $review->rating = $r->rating;
        $review->review = $r->review;
        $review->tgl = Carbon::now();
        $review->save();

        return redirect('/profile');
    }
}
