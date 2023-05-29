@extends('main')
@section('content')
    <div class="card card-body">
        <h1 class="text-center">Tambah Pasien</h1>
        <br>
        <div class="col-md-4">
            <a href="{{ route('pasien') }}" class="btn btn-primary">
                Back</a>
        </div>
        <hr>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pasien.simpan') }}" method="post" class="mx-2">
            <div class="form-group mt-3">
                @csrf
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Pasien" value="">
            </div>

            <div class="form-group mt-3">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control" name="jk">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" value="">
            </div>

            <div class="form-group mt-3">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat"></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="telp">No. Telp</label>
                <input type="text" class="form-control" name="telp" placeholder="Masukkan No. Telp" value="">
            </div>

            <div class="form-group mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>

@endsection
