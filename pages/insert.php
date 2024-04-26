<?php
include "music.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $insert = music::insert($_POST["ID_music"], $_POST["Judul_music"], $_POST["Nama_penyanyi"], $_POST["Deskripsi"], $_POST["Link_music"]); 

    if ($insert) {
        header("Location: http://localhost/Tugas-CRUD-PWEBPR-C-3032/pages/dashboard.php");
        exit(); 
    } else {
        echo "Gagal menambah data";
    }
} else {
    echo "Metode yang digunakan bukan metode POST";
}
?>