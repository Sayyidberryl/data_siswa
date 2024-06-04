<?php
session_start();


if(isset($_GET['key'])){
    $key = $_GET['key'];
    if(isset($_SESSION['siswa'][$key])){
        unset($_SESSION['siswa'][$key]);

    }

    header('Location: index.php');
    exit;   

}






?>