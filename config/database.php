<?php 

require_once 'env.php';

$url = $env['BASEURL'];
$host = $env['DB_HOST'];
$username = $env['DB_USER'];
$password = $env['DB_PASS'];
$database = $env['DB_NAME'];

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "dbmusicplaylist";

// $koneksi = new mysqli($host, $username, $password, $database);
// if (!$koneksi) {
//   echo "koneksi database gagal";
// }
?>