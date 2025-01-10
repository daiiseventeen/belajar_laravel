@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body ">
            <h1 class="card-title">Detail Data Siswa</h1>
            <p><strong>Nama:</strong> {{ $siswa->nama }}</p>
            <p><strong>NIS:</strong> {{ $siswa->nis }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $siswa->jenis_kelamin }}</p>
            <p><strong>Kelas:</strong> {{ $siswa->kelas }}</p>
            <a href="{{ route('siswa.index') }}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</div>
@endsection
