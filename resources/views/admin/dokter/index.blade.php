@extends('main')
@section('content')
    <div class="card card-body">
        <h1>Daftar Dokter</h1>
        <br>
        <div class="col-4">
            <a href="{{ route('dokter.create') }}" class="btn btn-primary">+ Tambah Dokter</a>
        </div>
        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Speasialis</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $iteration = 1 @endphp
                @foreach ($dokters as $item)
                    <tr>
                        <td>{{ $iteration++ }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['spesialis'] }}</td>
                        <td>{{ $item['telp'] }}</td>
                        <td>{{ $item['alamat'] }}</td>
                        <td>
                            <a href="{{ route('dokter.edit', $item['id']) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('dokter.hapus') }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $item['id'] }}">
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
