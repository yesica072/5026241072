@extends('template2')

@section('title', 'View Data EAS')

@section('konten')
<a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($eas as $row)
    <div class="card">
        <div class="card-header">
            Form View Data EAS
        </div>

        <div class="card-body">
            <form action="/eas/view" method="get">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="kode_pegawai"
                            id="kode_pegawai"
                            class="form-control"
                            required
                            value="{{ $row->kode_pegawai }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jabatan" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="namalengkap"
                            id="namalengkap"
                            class="form-control"
                            required
                            value="{{ $row->namalengkap }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="divisi"
                            id="divisi"
                            class="form-control"
                            required
                            value="{{ $row->divisi }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <textarea
                            name="departemen"
                            id="departemen"
                            class="form-control"
                            rows="4"
                            required
                        >{{ $row->departemen }}</textarea>
                    </div>
                </div>

            </form>
        </div>
    </div>

    @endforeach
@endsection
