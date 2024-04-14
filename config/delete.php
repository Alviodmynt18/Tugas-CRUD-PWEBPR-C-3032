<?php

include "music.php";
// var_dump($_GET["Id"]);

$deleted = music::delete($_GET["Id"]); 

if ($deleted) {
    header("Location: http://localhost/MusicPlaylist/config/");
} else {
    echo "Gagal menghapus data dengan ID Music ($ID_music)";
}
?>