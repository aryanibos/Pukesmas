<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Tambah Dokter</h1>
        <br>
        <a href="/dokter" class="btn btn-primary">
            < Back</a>
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

                <form action="/dokter" method="post" class="mx-2">
                    <div class="form-group mt-3">
                        @csrf
                        <label for="nama">Nama Dokter</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama dokter"
                            value="">
                    </div>
                    <div class="form-group mt-3">
                        <label for="tgl_lahir">Speasialis Dokter</label>
                        <select class="form-select form-select-sm" name="spesialis"
                            aria-label=".form-select-sm example">
                            <option selected>== Pilih Salah Satu ==</option>
                            <option value="Dokter Bedah">Dokter Bedah</option>
                            <option value="Dokter Gigi">Dokter Gigi</option>
                            <option value="Dokter Hewan">Dokter Hewan</option>
                            <option value="Dokter Mata">Dokter Mata</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="telp">No. Telp</label>
                        <input type="text" class="form-control" name="telp" placeholder="Masukkan No. Telp"
                            value="">
                    </div>

                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat"></textarea>
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
