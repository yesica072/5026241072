<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class easController extends Controller
{
    public function index()
    {
        $eas = DB::table('eas')->get();
        return view('eas.index', compact('eas'));
    }

    public function create()
    {
        return view('eas.tambahdata');
    }

    public function store(Request $request)
{

    DB::table('eas')->insert([
        'kode_pegawai' => $request->kode_pegawai,
        'namalengkap'  => $request->namalengkap,
        'divisi'       => $request->divisi,
        'departemen'   => $request->departemen,
    ]);

    return redirect()->route('eas.index');
}
}
