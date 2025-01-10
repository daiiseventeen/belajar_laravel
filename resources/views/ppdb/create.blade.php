@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 fw-bolder">Tambah Data Siswa</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control mt-2" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control mt-2" required>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select name="agama" id="agama" class="form-control mt-2" required>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control mt-2" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="number" name="telepon" id="telepon" class="form-control mt-2" required>
                </div>
                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control mt-2" required>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('ppdb.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
