<?php
include "music.php";

$update = music::update($_POST["ID_music"], $_POST["Judul_music"],$_POST["Nama_penyanyi"],$_POST["Deskripsi"], $_POST["Link_music"]);


if ($update) {
    header("Location: http://localhost/MusicPlaylist/config/");
} else{
    header("Location: http://localhost/MusicPlaylist/config/");
}
?>