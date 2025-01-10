@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header fs-2">{{ ('Data Siswa') }}</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('siswa.create') }}" class="btn btn-primary">Add</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Nis</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1 @endphp
                            @foreach ($Siswa as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->nis }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-success me-2 rounded">Edit</a>

                                        <a href="{{ route('siswa.show', $data->id) }}" class="btn btn-warning me-2 rounded">Show</a>

                                        <form action="{{ route('siswa.destroy', $data->id) }}" method="POST" style="display: inline;">
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
