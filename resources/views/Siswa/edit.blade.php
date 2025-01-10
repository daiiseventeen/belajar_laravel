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
                    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}" class="form-control" placeholder="Masukkan nama siswa">
                        </div>
                        <div class="form-group mt-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" name="nis" id="nis" value="{{ $siswa->nis }}" class="form-control" placeholder="Masukkan NIS siswa">
                        </div>
                        <div class="form-group mt-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select name="kelas" id="kelas" class="form-control">
                                <option value="XI RPL 1" {{ $siswa->kelas == 'XI RPL 1' ? 'selected' : '' }}>XI RPL 1</option>
                                <option value="XI RPL 2" {{ $siswa->kelas == 'XI RPL 2' ? 'selected' : '' }}>XI RPL 2</option>
                                <option value="XI RPL 3" {{ $siswa->kelas == 'XI RPL 3' ? 'selected' : '' }}>XI RPL 3</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
