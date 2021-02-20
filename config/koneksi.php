<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$server   ="localhost" ;
$username ="root";
$password ="";
$database   ="gymmaster";

//Koneksi dan memilih database di server

//mysqli_connect ($server,$username,$password) or die ("Koneksi database gagal");
//mysqli_select_db($database) or die ("Database Tidak Tersedia");

$conn = mysqli_connect($server, $username, "", $database) or die ("Koneksi Gagal");
?>