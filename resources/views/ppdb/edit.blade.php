@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Edit Data Siswa</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('ppdb.update', $ppdb->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $ppdb->nama_lengkap }}" class="form-control" placeholder="Masukkan nama lengkap siswa" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="Laki-laki" {{ $ppdb->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $ppdb->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option value="Islam" {{ $ppdb->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $ppdb->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ $ppdb->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ $ppdb->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Buddha" {{ $ppdb->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                <option value="Konghucu" {{ $ppdb->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Masukkan alamat siswa" required>{{ $ppdb->alamat }}</textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="number" name="telepon" id="telepon" value="{{ $ppdb->telepon }}" class="form-control" placeholder="Masukkan nomor telepon siswa" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" id="asal_sekolah" value="{{ $ppdb->asal_sekolah }}" class="form-control" placeholder="Masukkan asal sekolah siswa" required>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('ppdb.index') }}" class="btn btn-secondary ms-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
