@extends('template2')

@section('title', 'Tambah Data EAS')

@section('konten')
	<a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data EAS
        </div>

        <div class="card-body">
            <form action="/eas" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kode_pegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10">
                        <input type="text" name="kode_pegawai" id="kode_pegawai" class="form-control" required
                        pattern="[a-zA-Z0-9]+"
         title="Hanya boleh huruf (a-z, A-Z) dan angka (0-9), tanpa spasi atau karakter spesial.">>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap" class="form-control" required
                        pattern="^[A-Za-z\s]+$"
         title="Hanya boleh huruf dan spasi, tidak boleh kosong." >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="divisi" id="divisi" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" name="departemen" id="departemen" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
