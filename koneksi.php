<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "crud-bootstrap";

    $koneksi = mysqli_connect($host,$user,$password,$db) or die(mysqli_error($db));

    // if(!$koneksi){
    //      echo "Koneksi Gagal";
    //  }else{
    //      echo "Koneksi Berhasil";
    // }
?>