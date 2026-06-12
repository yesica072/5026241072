@extends('template2')
@section('title', 'Data Beras')
@section('konten')

<h2>Data Beras</h2>

<a href="{{ route('beras.create') }}" class="btn btn-primary">Tambah Data</a>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Kode Beras</th>
            <th>Merk Beras</th>
            <th>Stock Beras</th>
            <th>Tersedia</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $row)
             <tr>
                <td>{{ $row->kodeberas }}</td>
                <td>{{ $row->merkberas }}</td>
                <td>{{ $row->stockberas }}</td>
                <td>{{ $row->tersedia }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center text-muted">
                    Belum ada data beras.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
