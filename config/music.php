<?php
include "database.php";

class music{
    static function select($row_number = null) {
        global $koneksi;
        $sql = mysqli_query($koneksi, "SELECT * FROM musicplaylist");
        $rows = array();

        if (mysqli_num_rows($sql) > 0) {
            $count = 0;
            while ($musicdata = mysqli_fetch_array($sql)) {
                $count++;
                if ($row_number !== null && $count != $row_number) {
                    continue; 
                }
                $rows[] = $musicdata;
                if ($row_number !== null) {
                    break; 
                }
            }
        }
        return $rows;
    }


    static function insert($Id_music, $Judul_music, $Nama_penyanyi, $Deskripsi, $Link_music){
        global $koneksi;
        $sql = "INSERT INTO musicplaylist(Id_music, Judul_music, Nama_penyanyi, Deskripsi, Link_music) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($koneksi, $sql);
        mysqli_stmt_bind_param($stmt, 'sssss', $Id_music, $Judul_music, $Nama_penyanyi, $Deskripsi, $Link_music);
        mysqli_stmt_execute($stmt);
        
        $hasil = $Id_music;
        
        mysqli_stmt_close($stmt);
        
        return $hasil;
    }


    static function update($Id_music, $Judul_music, $Nama_penyanyi, $Deskripsi, $Link_music) {
        global $koneksi;
        $sql = "UPDATE musicplaylist SET Judul_music=?, Nama_penyanyi=?, Deskripsi=?, Link_music=? WHERE Id_music=?";
        $stmt = mysqli_prepare($koneksi, $sql);
        mysqli_stmt_bind_param($stmt, 'sssss', $Judul_music, $Nama_penyanyi, $Deskripsi, $Link_music, $Id_music);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    static function delete($Id_music) {
        global $koneksi;
        $sql = "DELETE FROM musicplaylist WHERE Id_music=?";
        $stmt = mysqli_prepare($koneksi, $sql);
        mysqli_stmt_bind_param($stmt, 's', $Id_music);
        $success = mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);
        
        return $success; 
    }
}


?>