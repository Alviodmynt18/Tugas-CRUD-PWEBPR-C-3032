<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "dbmusicplaylist";

$koneksi = new mysqli($host, $username, $password, $database);
if (!$koneksi) {
  echo "koneksi database gagal";
}
?>