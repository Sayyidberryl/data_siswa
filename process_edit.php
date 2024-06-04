<?php
session_start();

if (isset($_POST['submit'])) {
    $key = $_POST['key'];
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $rayon = $_POST['rayon'];

    if(isset($_SESSION['siswa'][$key])){
        $_SESSION['siswa'][$key]['nama'] = $nama; 
        $_SESSION['siswa'][$key]['nama'] = $nis; 
        $_SESSION['siswa'][$key]['nama'] = $rayon; 
        
    }
    header("location:index.php");
    exit;

}



?>