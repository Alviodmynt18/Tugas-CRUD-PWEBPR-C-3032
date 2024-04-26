<?php
include "music.php";

$update = music::update($_POST["ID_music"], $_POST["Judul_music"],$_POST["Nama_penyanyi"],$_POST["Deskripsi"], $_POST["Link_music"]);


if ($update) {
    header("Location: http://localhost/TUGAS-CRUD-PWEBPR-C-3032/pages/dashboard.php");
} else{
    echo "Gagal mengupdate data";;
}
?>