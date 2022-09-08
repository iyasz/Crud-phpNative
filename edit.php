<?php
include "koneksi.php";

$id = $_GET['id'];

$datas = mysqli_query($conn, "SELECT * FROM tbl_siswa WHERE id='$id'");

$data = mysqli_fetch_assoc($datas);
// var_dump($datas);

// echo '</br>';
// var_dump($data);




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <style>
        .input input {
            margin-bottom: 10px;
        }

        .input input:focus {
            box-shadow: none;
        }
    </style>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="header mb-4">
                                <h3>Formulir Pendaftaran</h3>
                            </div>
                            <div class="input">
                                <label for="">Nama Lengkap</label>
                                <input type="text" autocomplete="off" placeholder="Nama Lengkap Siswa" required class="form-control" name="namalengkap" value="<?= $data['nama'] ?>">

                                <label for="">Nomor Induk Siswa</label>
                                <input autocomplete="off" placeholder="Nomor Induk Siswa" required type="number" class="form-control" name="nis" value="<?= $data['nis'] ?>">

                                <label for="">Kelas</label>
                                <input autocomplete="off" placeholder="Kelas Siswa" required type="text" class="form-control" name="kelas" value="<?= $data['kelas'] ?>">

                                <div class="form-radio mb-3">
                                    <label for="">Jenis Kelamin :</label>
                                    <div class="form-check">
                                        <input class="form-check-input" <?php if($data['jk'] == "Laki Laki") { echo "checked"; } ?> type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Laki Laki">
                                        <label class="form-check-label" for="flexRadioDefault1" required>
                                            Laki Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" <?php if($data['jk'] == "Perempuan") { echo "checked"; } ?>  type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Perempuan" required>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>

                                <label for="">No Telepon</label>
                                <input autocomplete="off" placeholder="No Telpon Siswa" required type="number" class="form-control" name="telp" value="<?= $data['telp'] ?>">

                                <label for="">Email</label>
                                <input autocomplete="off" placeholder="Email Siswa" required type="text" class="form-control" name="email" value="<?= $data['email'] ?>">

                            </div>
                            <div class="footer mt-4">
                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                                <button class="btn btn-danger" type="reset">Reset</button>
                                <a href="index.php" class="btn btn-info">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>