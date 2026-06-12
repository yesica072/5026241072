<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerasController extends Controller
{
    public function index()
    {
        $data = DB::table('beras')->get();
        return view('beras.index', compact('data'));
    }

    public function create()
    {
        return view('beras.tambahdata');
    }

    public function store(Request $request)
    {
        DB::table('beras')->insert([
            'merkberas'  => $request->merkberas,
            'stockberas' => $request->stockberas,
            'tersedia'   => $request->tersedia,
        ]);

        return redirect()->route('beras.index');
    }
}
