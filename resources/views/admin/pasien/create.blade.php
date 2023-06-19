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
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Masukkan Nama Pasien" value="{{ old('nama') }}">
                @error('nama')
                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control @error('jk') is-invalid @enderror" name="jk">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                @error('jk')
                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                @error('tgl_lahir')
                <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="alamat">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat">{{ old('alamat') }}</textarea>
                @error('alamat')
                <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="telp">No. Telp</label>
                <input type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" placeholder="Masukkan No. Telp" value="{{ old('telp') }}">
                @error('telp')
                <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="dokter_id">Nama Dokter</label>
                <select class="form-control @error('dokter_id') is-invalid @enderror" name="dokter_id">
                   @foreach ($dokters as $item)
                          <option value="{{ $item->id }}">{{ $item->nama }}</option>
                   @endforeach
                </select>
                @error('dokter_id')
                    <div class="text-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>

@endsection
