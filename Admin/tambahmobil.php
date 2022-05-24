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
                <form action="tambahmobil.php" method="post">
                    <label for="ID_Mobil">ID Mobil</label>
                    <input type="text" id="ID_Mobil" name="ID_Mobil" class="form-control" required>
                    <label for="Merk">Merk Mobil</label>
                    <input type="text" id="Merk" name="Merk" class="form-control">
                    <label for="Warna">Warna Mobil</label>
                    <input type="text" id="Warna" name="Warna" class="form-control">

                    <input class="btn btn-dark mt-3" type="submit" name="submit" values="Tambah Data">
                </form>
                    <a href="indexmobil.php" class="btn btn-dark mt-3">Back</a>
            </div>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $ID_Mobil = $_POST['ID_Mobil'];
                $Merk = $_POST['Merk'];
                $Warna = $_POST['Warna'];

                $sqlInsert = "INSERT INTO mobil(ID_Mobil, Merk, Warna) VALUES ('$ID_Mobil', '$Merk', '$Warna')";
                $queryInsert = mysqli_query($conn, $sqlInsert);
            }
        ?>

    </div?
</body>
</html>