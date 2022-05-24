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
            <h1>Berikut Data Pelanggan</h1>
            <div class="container">
                <div class="button">
                    <a href="tambahpelanggan.php" class="btn btn-light btn-md">Tambah Data</a>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>No Telpon</th>
                        <th>Menu</th>
                    </thead>

                    <?php
                        $sqlGet = "SELECT * FROM pelanggan";
                        $query = mysqli_query($conn, $sqlGet);
                        while($data = mysqli_fetch_array($query)) {
                            echo "
                                <tbody>
                                    <tr>
                                        <td>$data[ID_Pelanggan]</td>
                                        <td>$data[Nama_Pelanggan]</td>
                                        <td>$data[Alamat]</td>
                                        <td>$data[No_Telpon]</td>
                                        <td>
                                            <div class='row'>
                                                <div class='col'>
                                                    <a href='editpelanggan.php?ID_Pelanggan=$data[ID_Pelanggan]' class='btn btn-sm btn-warning'>Edit</a>
                                                </div>
                                                <div class='col'>
                                                    <a href='hapuspelanggan.php?ID_Pelanggan=$data[ID_Pelanggan]' class='btn btn-sm btn-danger'>Hapus</a>
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