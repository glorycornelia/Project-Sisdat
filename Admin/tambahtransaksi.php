<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ProjectUAS-Kelompok 8B</title>
    <link rel="stylesheet" href="good.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo"> Rental Mobil</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="beranda.html">BERANDA</a></li>
                    <li><a href="indexmobil.php">MOBIL</a></li>
                    <li><a href="indexpelanggan.php">PELANGGAN</a></li>
                    <li><a href="indexharga.php">HARGA</a></li>
                    <li><a href="indextransaksi.php">TRANSAKSI</a></li>
                </ul>
            </div>
        </div>
        <div class="w-50 mx-auto border p-3 mt-5">
            <div class="content">
                <h1>Tambahkan Data Transaksi</h1>
                <form action="tambahtransaksi.php" method="post">
                    <label for="ID_Pelanggan">ID Pelanggan</label>
                    <input type="text" id="ID_Pelanggan" name="ID_Pelanggan" class="form-control">
                    <label for="ID_Mobil">ID Mobil</label>
                    <input type="text" id="ID_Mobil" name="ID_Mobil" class="form-control">
                    <label for="Tanggal_Pinjam">Tanggal Pinjam</label>
                    <input type="date" id="Tanggal_Pinjam" name="Tanggal_Pinjam" class="form-control">
                    <label for="Tanggal_Kembali">Tanggal Kembali</label>
                    <input type="date" id="Tanggal_Kembali" name="Tanggal_Kembali" class="form-control">

                    <input class="btn btn-dark mt-3" type="submit" name="submit" values="Tambah Data">
                </form>
                    <a href="indextransaksi.php" class="btn btn-dark mt-3">Back</a>
            </div>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $ID_Pelanggan = $_POST['ID_Pelanggan'];
                $ID_Mobil = $_POST['ID_Mobil'];
                $Tanggal_Pinjam = $_POST['Tanggal_Pinjam'];
                $Tanggal_Kembali = $_POST['Tanggal_Kembali'];

                $tgl2 = new DateTime($_POST['Tanggal_Kembali']);
                $tgl1 = new DateTime($_POST['Tanggal_Pinjam']);
                $Tipe_Harga = $tgl2->diff($tgl1)->days;

                $sqlInsert =    "INSERT INTO transaksi(No_Transaksi, ID_Pelanggan, ID_Mobil, Tanggal_Pinjam, Tanggal_Kembali, Tipe_Harga)
                                VALUES ('', '$ID_Pelanggan', '$ID_Mobil', '$Tanggal_Pinjam', '$Tanggal_Kembali', '$Tipe_Harga')";
                $queryInsert = mysqli_query($conn, $sqlInsert);
            }
        ?>

    </div?
</body>
</html>