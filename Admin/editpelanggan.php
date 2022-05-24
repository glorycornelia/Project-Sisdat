<?php
    include 'koneksi.php';
    $ID_Pelanggan = $_GET['ID_Pelanggan'];
    $sqlGet = "SELECT * FROM pelanggan WHERE ID_Pelanggan='$ID_Pelanggan'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
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
                    <li><a href="indekmobil.php">MOBIL</a></li>
                    <li><a href="indexpelanggan.php">PELANGGAN</a></li>
                    <li><a href="indexharga.php">HARGA</a></li>
                    <li><a href="indextransaksi.php">TRANSAKSI</a></li>
                </ul>
            </div>
        </div>
        <div class="w-50 mx-auto border p-3 mt-5">
            <div class="content">
                <h1>Tambahkan Data Pelanggan</h1>
                <form action="editpelanggan.php" method="post">
                    <label for="ID_Pelanggan">ID Pelanggan</label>
                    <input type="text" id="ID_Pelanggan" name="ID_Pelanggan" value="<?php echo "$data[ID_Pelanggan]"?>" class="form-control" readonly>
                    <label for="Nama_Pelanggan">Nama Pelanggan</label>
                    <input type="text" id="Nama_Pelanggan" name="Nama_Pelanggan" value="<?php echo "$data[Nama_Pelanggan]"?>" class="form-control">
                    <label for="Alamat">Alamat</label>
                    <input type="text" id="Alamat" name="Alamat" value="<?php echo "$data[Alamat]"?>" class="form-control">
                    <label for="No_Telpon">No Telpon</label>
                    <input type="text" id="No_Telpon" name="No_Telpon" value="<?php echo "$data[No_Telpon]"?>" class="form-control">

                    <input class="btn btn-dark mt-3" type="submit" name="submit" values="Tambah Data">
                </form>
            </div>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $ID_Pelanggan = $_POST['ID_Pelanggan'];
                $Nama_Pelanggan= $_POST['Nama_Pelanggan'];
                $Alamat = $_POST['Alamat'];
                $No_Telpon= $_POST['No_Telpon'];

                $sqlUpdate =    "UPDATE pelanggan SET Nama_Pelanggan='$Nama_Pelanggan', Alamat='$Alamat', No_Telpon='$No_Telpon'
                                WHERE ID_Pelanggan='$ID_Pelanggan'";
                $queryUpdate = mysqli_query($conn, $sqlUpdate);

                header("location: indexpelanggan.php");
            }
        ?>
    </div?
</body>
</html>