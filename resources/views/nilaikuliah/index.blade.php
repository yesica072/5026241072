@extends('template2')
@section('title', 'Data Nilai Kuliah')
@section('konten')

<h2>Data Nilai Kuliah</h2>

<a href="{{ route('nilaikuliah.create') }}" class="btn btn-primary">Tambah Data</a>

<table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>{{ $row->NilaiHuruf }}</td>
                <td>{{ $row->Bobot }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center text-muted">
                    Belum ada data nilai kuliah.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
dejdjd
@endsection
