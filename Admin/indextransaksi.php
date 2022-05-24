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
        <div class="content">
            <h1>Berikut Data Transaksi</h1>
            <div class="container">
                <div class="button">
                    <a href="tambahtransaksi.php" class="btn btn-light btn-md">Tambah Data</a>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <th>Nomor</th>
                        <th>ID Pelanggan</th>
                        <th>ID Mobil</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Tipe Harga</th>
                        <th>Menu</th>
                    </thead>

                    <?php
                        $sqlGet = "SELECT * FROM transaksi";
                        $query = mysqli_query($conn, $sqlGet);
                        while($data = mysqli_fetch_array($query)) {
                            echo "
                                <tbody>
                                    <tr>
                                        <td>$data[No_Transaksi]</td>
                                        <td>$data[ID_Pelanggan]</td>
                                        <td>$data[ID_Mobil]</td>
                                        <td>$data[Tanggal_Pinjam]</td>
                                        <td>$data[Tanggal_Kembali]</td>
                                        <td>$data[Tipe_Harga]</td>
                                        <td>
                                            <div class='row'>
                                                <div class='col'>
                                                    <a href='edittransaksi.php?No_Transaksi=$data[No_Transaksi]' class='btn btn-sm btn-warning'>Edit</a>
                                                </div>
                                                <div class='col'>
                                                    <a href='hapustransaksi.php?No_Transaksi=$data[No_Transaksi]' class='btn btn-sm btn-danger'>Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            ";
                        }
                    ?>

                </table>
            </div>
        </div>
    </div>
</body>
</html>