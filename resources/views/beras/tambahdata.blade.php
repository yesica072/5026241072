@extends('template2')

@section('title', 'Tambah Data Beras')

@section('konten')
    <a href="/beras" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Beras
        </div>

        <div class="card-body">
            <form action="/beras" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="MerkBeras" class="col-sm-2 col-form-label">Merk Beras</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkberas" id="merkberas" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="StockBeras" class="col-sm-2 col-form-label">Stock Beras</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockberas" id="stockberas" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="Tersedia" class="col-sm-2 col-form-label">Tersedia (y/n)</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-select" required>
                            <option value="">-- Pilih --</option>
                            <option value="Y" {{ old('tersedia') == 'Y' ? 'selected' : '' }}>Y</option>
                            <option value="N" {{ old('tersedia') == 'N' ? 'selected' : '' }}>N</option>
                        </select>
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
