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
                    <td>{{ $data['nim'] }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $data['nama'] }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $data['gender'] }}</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>{{ $data['prodi'] }}</td>
                </tr>
                <tr>
                    <th>Skill Web &amp; Programming</th>
                    <td>
                        <ul>
                            @foreach ($data['skill'] as $skill)
                                <li>{{ $skill }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th>Tempat Domisili</th>
                    <td>{{ $data['tempat'] }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $data['email'] }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>

</html>
