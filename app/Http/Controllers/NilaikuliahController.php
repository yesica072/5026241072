<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{
    private function nilaiHuruf($na)
    {
        if ($na <= 40)       return 'D';
        elseif ($na <= 60)   return 'C';
        elseif ($na <= 80)   return 'B';
        else                   return 'A';
    }

    public function index()
    {
        $data = DB::table('nilaikuliah')->get();

        foreach ($data as $row) {
            $row->NilaiHuruf = $this->nilaiHuruf($row->NilaiAngka);
            $row->Bobot      = $row->NilaiAngka * $row->SKS;
        }

        return view('nilaikuliah.index', compact('data'));
    }

    public function create()
    {
        return view('nilaikuliah.tambahdata');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);

        return redirect()->route('nilaikuliah.index');
    }
}
