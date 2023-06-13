@extends('main')
@section('content')
    <div class="card card-body">
        <h1 class="text-center">Edit Dokter</h1>
        <br>
        <div class="col-md-4">
            <a href="{{ route('dokter') }}" class="btn btn-primary">
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

        <form action="{{ route('dokter.update', $dokter->id) }}" method="post" class="mx-2">
            @method('PUT')
            <div class="form-group mt-3">
                @csrf
                <label for="nama">Nama Dokter</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama dokter" value="{{ $dokter->nama }}">
            </div>
            <div class="form-group mt-3">
                <label for="tgl_lahir">Speasialis Dokter</label>
                <select class="form-select form-select-sm" name="spesialis" aria-label=".form-select-sm example">
                    <option value="Dokter Bedah" {{ $dokter->spesialis == 'Dokter Bedah' ? 'selected' :  '' }}>Dokter Bedah</option>
                    <option value="Dokter Gigi" {{  $dokter->spesialis == 'Dokter Gigi' ? 'selected' :  ''  }}>Dokter Gigi</option>
                    <option value="Dokter Hewan" {{  $dokter->spesialis == 'Dokter Hewan' ? 'selected' :  ''  }}>Dokter Hewan</option>
                    <option value="Dokter Mata" {{  $dokter->spesialis == 'Dokter Mata' ? 'selected' :  ''  }}>Dokter Mata</option>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="telp">No. Telp</label>
                <input type="text" class="form-control" name="telp" placeholder="Masukkan No. Telp" value="{{ $dokter->telp }}">
            </div>

            <div class="form-group mt-3">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat">{{ $dokter->alamat }}</textarea>
            </div>

            <div class="form-group mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>

@endsection
