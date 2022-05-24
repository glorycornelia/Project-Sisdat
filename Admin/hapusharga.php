<?php
    include 'koneksi.php';

    $Tipe_Harga = $_GET['Tipe_Harga'];
    $sqlDelete = "DELETE FROM harga WHERE Tipe_Harga='$Tipe_Harga'";
    mysqli_query($conn, $sqlDelete);

    header("location: indexharga.php");
?>