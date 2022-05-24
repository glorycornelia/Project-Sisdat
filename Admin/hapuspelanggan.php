<?php
    include 'koneksi.php';

    $ID_Pelanggan = $_GET['ID_Pelanggan'];
    $sqlDelete = "DELETE FROM pelanggan WHERE ID_Pelanggan='$ID_Pelanggan'";
    mysqli_query($conn, $sqlDelete);

    header("location: indexpelanggan.php");
?>