<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaDBController extends Controller
{
    public function index()
    {
        $keranjangBelanja = DB::table('KeranjangBelanja')->get();
        return view('keranjang.keranjangbelanja', ['keranjangBelanja' => $keranjangBelanja]);
    }

    public function beli()
    {
        return view('keranjang.tambahKeranjangBelanja');
    }

    public function store(Request $request)
    {
        DB::table('KeranjangBelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);
        return redirect('/keranjang-belanja');
    }

    public function batal($id)
    {
        DB::table('KeranjangBelanja')->where('ID', $id)->delete();
        return redirect('/keranjang-belanja');
    }
}
