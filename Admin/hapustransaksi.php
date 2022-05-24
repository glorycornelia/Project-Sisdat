<?php
    include 'koneksi.php';

    $No_Transaksi = $_GET['No_Transaksi'];
    $sqlDelete = "DELETE FROM transaksi WHERE No_Transaksi='$No_Transaksi'";
    mysqli_query($conn, $sqlDelete);

    header("location: indextransaksi.php");
?>