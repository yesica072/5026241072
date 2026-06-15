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
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($eas as $row)
             <tr>
                <td>{{ $row->kode_pegawai }}</td>
                <td>{{ $row->namalengkap }}</td>
                <td>{{ $row->divisi }}</td>
                <td>{{ $row->departemen }}</td>
                <td>
                    <a href="/eas/view/{{ $row->kode_pegawai }}" class="btn btn-warning">View</a>
                </td>
            </tr>
        @empty
        <a href="/eas/view/{{ $row->kode_pegawai }}" class="btn btn-warning">View</a>
            <tr>
                <td colspan="4" class="text-center text-muted">
                    Belum ada data eas.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
