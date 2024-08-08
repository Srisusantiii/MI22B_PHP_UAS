<?php
 /**
     * NIM : 2257401091
     * NAMA : SRI SUSANTI
     * KELAS MI22B
     */ 
session_start();
if (!isset($_SESSION['user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>