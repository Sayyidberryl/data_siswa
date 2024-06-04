<?php
session_start();

if(isset($_POST['submit'])){
   $nama = $_POST['nama'];
   $nis = $_POST['nis'];
   $rayon = $_POST['rayon'];
   

   $siswa = array(
    'nama' => $nama,
    'nis' => $nis,
    'rayon' => $rayon
   );
   $_SESSION['siswa'][] = $siswa;

   header('Location: index.php');
   exit;
}



?>