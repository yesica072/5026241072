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
public function view($kode_pegawai)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$eas = DB::table('eas')->where('kode_pegawai',$kode_pegawai)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('eas.view',['eas' => $eas]);

	}
}
