<?php
    include 'koneksi.php';
    $ID_Mobil = $_GET['ID_Mobil'];
    $sqlGet = "SELECT * FROM mobil WHERE ID_Mobil='$ID_Mobil'";
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
                <h1>Tambahkan Data Mobil</h1>
                <form action="editmobil.php" method="post">
                    <label for="ID_Mobil">ID Mobil</label>
                    <input type="text" id="ID_Mobil" name="ID_Mobil" value="<?php echo "$data[ID_Mobil]"?>" class="form-control" readonly>
                    <label for="Merk">Merk Mobil</label>
                    <input type="text" id="Merk" name="Merk" value="<?php echo "$data[Merk]"?>" class="form-control">
                    <label for="Warna">Warna Mobil</label>
                    <input type="text" id="Warna" name="Warna" value="<?php echo "$data[Warna]"?>" class="form-control">

                    <input class="btn btn-dark mt-3" type="submit" name="submit" values="Tambah Data">
                </form>
            </div>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $ID_Mobil = $_POST['ID_Mobil'];
                $Merk = $_POST['Merk'];
                $Warna = $_POST['Warna'];

                $sqlUpdate = "UPDATE mobil SET Merk='$Merk', Warna='$Warna' WHERE ID_Mobil='$ID_Mobil'";
                $queryUpdate = mysqli_query($conn, $sqlUpdate);

                header("location: indexmobil.php");
            }
        ?>
    </div?
</body>
</html>