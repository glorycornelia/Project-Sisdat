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
                <h1>Tambahkan Data Mobil</h1>
                <form action="tambahharga.php" method="post">
                    <label for="Tipe_Harga">Tipe Harga</label>
                    <input type="text" id="Tipe_Harga" name="Tipe_Harga" class="form-control" required>
                    <label for="Waktu">Waktu (Hari)</label>
                    <input type="text" id="Waktu" name="Waktu" class="form-control">
                    <label for="Harga">Harga</label>
                    <input type="text" id="Harga" name="Harga" class="form-control">

                    <input class="btn btn-dark mt-3" type="submit" name="submit" values="Tambah Data">
                </form>
                    <a href="indexharga.php" class="btn btn-dark mt-3">Back</a>
            </div>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $Tipe_Harga = $_POST['Tipe_Harga'];
                $Waktu = $_POST['Waktu'];
                $Harga = $_POST['Harga'];

                $sqlInsert = "INSERT INTO harga(Tipe_Harga, Waktu, Harga) VALUES ('$Tipe_Harga', '$Waktu', '$Harga')";
                $queryInsert = mysqli_query($conn, $sqlInsert);
            }
        ?>

    </div?
</body>
</html>