<?php 
    /**
     * NIM : 2257401091
     * NAMA : SRI SUSANTI
     * KELAS : MI22B
     */ 
    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM kategori WHERE kategori_brg = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('location: kategori.php');

    } else {
        echo "Gagal Hapus Barang";
    }
?>
