<?php
include "koneksi.php";

$data = $conn->query("SELECT * FROM tbl_siswa");

if(isset($_POST['submit'])){
    $nama = htmlspecialchars($_POST['namalengkap']);
    $nis = htmlspecialchars($_POST['nis']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $kelamin = htmlspecialchars($_POST['flexRadioDefault']);
    $telp = htmlspecialchars($_POST['telp']);
    $email = htmlspecialchars($_POST['email']);

    mysqli_query($conn, "INSERT INTO tbl_siswa (`nama`,`nis`,`kelas`,`jk`,`telp`,`email`) VALUES ('$nama', '$nis', '$kelas', '$kelamin', '$telp', '$email')");


}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud PHP Native</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <style>
        .input input {
            margin-bottom: 10px;
        }
        .input input:focus{
            box-shadow: none;
        }
    </style>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="header mb-4">
                                <h3>Formulir Pendaftaran</h3>
                            </div>
                            <div class="input">
                                <label for="">Nama Lengkap</label>
                                <input type="text" autocomplete="off" placeholder="Nama Lengkap Siswa" required class="form-control" name="namalengkap">
    
                                <label for="">Nomor Induk Siswa</label>
                                <input autocomplete="off" placeholder="Nomor Induk Siswa" required type="text" class="form-control" name="nis">
    
                                <label for="">Kelas</label>
                                <input autocomplete="off" placeholder="Kelas Siswa" required type="text" class="form-control" name="kelas">

                                <div class="form-radio mb-3">
                                    <label for="">Jenis Kelamin :</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Laki Laki">
                                        <label class="form-check-label" for="flexRadioDefault1" required>
                                            Laki Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Perempuan" required >
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>

                                <label for="">No Telepon</label>
                                <input autocomplete="off" placeholder="No Telpon Siswa" required type="number" class="form-control" name="telp">

                                <label for="">Email</label>
                                <input autocomplete="off" placeholder="Email Siswa" required type="text" class="form-control" name="email">

                            </div>
                            <div class="footer mt-4">
                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                                <button class="btn btn-danger" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="header ps-4">
                            <h3>List Pendaftar</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>NIS</th>
                                    <th>Kelas</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Telp</th>
                                    <th>Email</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-primary btn-sm"><i class='bx bx-edit-alt' ></i></a>
                                        <a href="" class="btn btn-danger btn-sm"><i class='bx bx-trash' ></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>