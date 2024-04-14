<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update</title>
    <style type = "text/css">
        h2 {
            text-align: center;
        }
        table{
            width: 50%;
            background: #855771;
            border-radius: 20px;
        }
        td,
        input{
            padding: 10px;
            font-size: 15px;
            border-radius:5px;
            display:flex;
            flex-direction: column;
            margin-top: 12px;
            margin-left: 30px;
            margin-right: 30px;
        }
        button{
            width: 100px;
            background: #006400;
            border: 1px solid rgb(165, 161, 161);
            color: #000000;
            border-radius: 5px;
            text-align:center;
        }
        button:hover {
            background: #eee;
            color: black;
        }
        .button{
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <h2>Update Data</h2>
    <form action = "update.php" method="post">
        <table align= "center">
            <tr>
                <td><input type ="text" name="ID_music" placeholder="ID Music" size="25"></td>
                <td><input type ="text" name="Judul_music" placeholder="Judul Music" size="25"></td>
                <td><input type ="text" name="Nama_penyanyi" placeholder="Nama Penyanyi" size="25"></td>
                <td><input type ="text" name="Deskripsi" placeholder="Deskripsi" size="25"></td>
                <td><input type ="text" name="Link_music" placeholder="Link Music" size="25"></td>
                
            </tr>
            <tr class= "button">
                <td><button type ="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>