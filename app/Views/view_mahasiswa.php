<!DOCTYPE html>
<html lang="en">
<title>My Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        font-family: "Lato", sans-serif
    }

    .mySlides {
        display: none
    }
</style>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="/" class="w3-bar-item w3-button w3-padding-large">Welcome Message</a>
            <a href="/profil" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Profil Diri</a>
            <a href="/mahasiswa" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Data Mahasiswa</a>
            <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
        </div>
    </div>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <br><br><br>
                <h1 class="mt-30">Data Mahasiswa Arsitektur</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Peringkat</th>
                            <th scope="col"> Nama Lengkap </th>
                            <th scope="col"> NRP </th>
                            <th scope="col"> Asal Sekolah </th>
                            <th scope="col"> Alamat </th>
                            <th scope="col"> Perintah </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <th scope="row"><?= $mhs['mhs_urutan']; ?></th>
                                <td><?= $mhs['mhs_nama']; ?></td>
                                <td><?= $mhs['mhs_nrp']; ?></td>
                                <td><?= $mhs['mhs_asalsekolah']; ?></td>
                                <td><?= $mhs['mhs_alamat']; ?></td>
                                <td>
                                    <a href="" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>