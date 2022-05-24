<?php
    include 'koneksi.php';

    $ID_Mobil = $_GET['ID_Mobil'];
    $sqlDelete = "DELETE FROM mobil WHERE ID_Mobil='$ID_Mobil'";
    mysqli_query($conn, $sqlDelete);

    header("location: indexmobil.php");
?>