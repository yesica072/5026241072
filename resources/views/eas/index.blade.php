@extends('template2')
@section('title', 'Kode soal mypegawai')
@section('konten')

<h2>DATA EAS</h2>

<a href="{{ route('eas.create') }}" class="btn btn-primary">Tambah Data</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
        </tr>
    </thead>
    <tbody>
        @forelse($eas as $row)
             <tr>
                <td>{{ $row->kode_pegawai }}</td>
                <td>{{ $row->namalengkap }}</td>
                <td>{{ $row->divisi }}</td>
                <td>{{ $row->departemen }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center text-muted">
                    Belum ada data eas.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
