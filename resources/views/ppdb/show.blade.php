@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body ">
            <h1 class="card-title">Detail Data Siswa PPDB</h1>
            <p><strong>Nama Lengkap:</strong> {{ $ppdb->nama_lengkap }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $ppdb->jenis_kelamin }}</p>
            <p><strong>Agama:</strong> {{ $ppdb->agama }}</p>
            <p><strong>Alamat:</strong> {{ $ppdb->alamat }}</p>
            <p><strong>Telepon:</strong> {{ $ppdb->telepon }}</p>
            <p><strong>Asal Sekolah:</strong> {{ $ppdb->asal_sekolah }}</p>
            <a href="{{ route('ppdb.index') }}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</div>
@endsection
