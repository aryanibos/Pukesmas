@php
    $prodis = [
        'SI' => 'Sistem Informasi',
        'TI' => 'Teknik Informatika',
        'BD' => 'Bisnis Digital',
    ];
    
    $skills = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RWD Bootstrap' => 20,
        'PHP' => 30,
        'Pyhon' => 30,
        'Java' => 50,
    ];
    
    $domisilis = ['Jakarta', 'Depok', 'Bogor', 'Tanggerang', 'Bekasi', 'Lainnya'];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="mt-5 mb-5">
            <center>
                <h2>Form Pendaftaran</h2>
            </center>
        </div>

        <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adn"></i>
                            </div>
                        </div>
                        <input id="nim" name="nim" placeholder="Masukkan NIM " type="text"
                            class="form-control" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Masukkan Nama" type="text"
                            class="form-control" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input"
                            value="Laki Laki" required="required">
                        <label for="gender_0" class="custom-control-label">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input"
                            value="Perempuan" required="required">
                        <label for="gender_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="prodi" name="prodi" class="custom-select" required="required">
                        <?php
                        
                        foreach ($prodis as $p => $s) {
                            echo '<option value="' . $s . '">' . $s . '</option>';
                        }
                        
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web &amp; Programming</label>
                <div class="col-8">
                    <?php foreach ($skills as $k => $v) {?>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="<?= $k ?>" type="checkbox" class="custom-control-input"
                            value="<?= $k ?>">
                        <label for="<?= $k ?>" class="custom-control-label"><?= $k ?></label>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="tempat" class="col-4 col-form-label">Tempat Domisili</label>
                <div class="col-8">
                    <select id="tempat" name="tempat" class="custom-select" required="required">
                        <!-- Cara 1 -->
                        <!-- <?php
                        
                        // foreach ($domisilis as $d) {
                        //     echo '<option value="'. $d .'">'. $d .'</option>';
                        // }
                        ?> -->

                        <!-- Cara 2 -->
                        <?php foreach ($domisilis as $d):?>
                        <option value="<?= $d ?>"><?= $d ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                        <input id="email" name="email" placeholder="Masukkan Email" type="text"
                            class="form-control" required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    {{-- tangkap hasilnya --}}
    @if (isset($_POST['submit']))

        @php
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $gender = $_POST['gender'];
            $prodi = $_POST['prodi'];
            $skills = $_POST['skill'];
            $domisili = $_POST['tempat'];
            $email = $_POST['email'];
        @endphp

        <div class="container my-5">
            <div class="mt-5 mb-5">
                <center>
                    <h2>Hasil Form Pendaftaran</h2>
                </center>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>NIM</th>
                            <td>{{ $nim }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $nama }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{ $gender }}</td>
                        </tr>
                        <tr>
                            <th>Program Studi</th>
                            <td>{{ $prodi }}</td>
                        </tr>
                        <tr>
                            <th>Skill Web &amp; Programming</th>
                            <td>
                                <ul>
                                    @foreach ($skills as $skill)
                                        <li>{{ $skill }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>Tempat Domisili</th>
                            <td>{{ $domisili }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $email }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    @endif




</body>

</html>
