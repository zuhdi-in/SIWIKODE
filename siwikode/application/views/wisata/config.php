<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "dbsiwikode";
// Koneksi dan memilih database di server
$connect = mysqli_connect($server,$username,$password,$database) or die("Gagal");

?>