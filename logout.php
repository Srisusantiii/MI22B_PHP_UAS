<?php
     /**
     * NIM : 2257401091
     * NAMA : SRI SUSANTI
     * KELAS : MI22B
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>