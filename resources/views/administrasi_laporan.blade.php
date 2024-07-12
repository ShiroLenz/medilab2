<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Administrasi</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <center>
                    <h2>{{ $judul }}</h2>
                </center>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>tanggal</td>
                            <td>Kode Pasien</td>
                            <td>Nama Pasien</td>
                            <td>Kode Dokter</td>
                            <td>Nama Dokter</td>
                            <td>Biaya</td>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($administrasi as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->tanggal }}</td>
                                \<td>{{ $a->pasien->kode_pasien }}</td>
                                <td>{{ $a->pasien->nama_pasien }}</td>
                                <td>{{ $a->dokter->kode_dokter }}</td>
                                <td>{{ $a->dokter->nama_dokter }}</td>
                                <td>{{ $a->biaya }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>Mengetahui</h5>
                <br>
                <br>
                <br>
                <h5>Admin</h5>
            </div>
        </div>
    </div>
</body>
</html>