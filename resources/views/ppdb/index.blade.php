@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header fs-2">{{ ('PPDB') }}</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('ppdb.create') }}" class="btn btn-primary">Add</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Asal Sekolah</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1 @endphp
                            @foreach ($ppdb as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->nama_lengkap }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->agama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->telepon }}</td>
                                <td>{{ $data->asal_sekolah }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <a href="{{ route('ppdb.edit', $data->id) }}" class="btn btn-success me-2 rounded">Edit</a>

                                        <a href="{{ route('ppdb.show', $data->id) }}" class="btn btn-warning me-2 rounded">Show</a>

                                        <form action="{{ route('ppdb.destroy', $data->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
