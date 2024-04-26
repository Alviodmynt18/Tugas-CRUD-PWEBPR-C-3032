<?php

include "music.php";

$deleted = music::delete($_GET["Id"]); 

if ($deleted) {
    header("Location: http://localhost/Tugas-CRUD-PWEBPR-C-3032/pages/dashboard.php");
} else {
    echo "Gagal menghapus data dengan ID Music ($Id_music)";
}
?>