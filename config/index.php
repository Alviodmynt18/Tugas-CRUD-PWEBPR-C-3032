<?php
include "music.php";
$musicdata = music::select();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<style type= "text/css">
    h2{
        text-align: center;
    }
    table{
        width: 800px; 
        height: auto;
        border:0.5px solid #000000;
    }
    th, td{
        padding: 10px;
        border: 0.5px solid #000000;
        width:800px
    }
    .btn-edit{
        background-color: #FFFF00;
        color: #000000;
        padding: 8px 12px;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        margin-top: 5px;
        text-decoration: none;
    }
    .btn-delete{
        background-color: #FF0000;
        color: #000000;
        padding: 8px 12px;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        margin-top: 10px;
        text-decoration: none;
    }
</style>
<body>
    <h2>PLAYLIST MUSIC</h2>

    <table align="center">
        <tr bgcolor="#64343f">
            <th>ID Music</th>
            <th>Judul Music</th>
            <th>Nama Penyanyi</th>
            <th>Deskripsi</th>
            <th>Link Music</th>
            <th>Owner</th>
            <th>No HP</th>
            <th>Opsi</th>
        </tr>
        <?php
        foreach ($musicdata as $row) {
        ?>
        <tr>
            <td><?= $row["ID_music"]; ?></td>
            <td><?= $row["Judul_music"]; ?></td>
            <td><?= $row["Nama_penyanyi"]; ?></td>
            <td><?= $row["Deskripsi"]; ?></td>
            <td><?= $row["Link_music"]; ?></td>
            <td><?= $row["Owner"]; ?></td>
            <td><?= $row["No_hp"]; ?></td>
            <td>
                <a href="formupdate.php?Id=<?php echo $row["ID_music"]; ?>" class="btn-edit">Edit</a> 
                <a href="delete.php?Id=<?php echo $row["ID_music"]; ?>" class="btn-delete">Delete</a> 

            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>