<?php 
    /**
     * NIM : 2257401091
     * NAMA : SRI SUSANTI
     * KELAS : MI22B
     */ 
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "uas_srisusanti";

    $koneksi    = mysqli_connect($host, $user, $password, $dbname);
    if (mysqli_connect_errno()) {
        die("Koneksi Gagal Karena : ". mysqli_connect_error());
    }
?>