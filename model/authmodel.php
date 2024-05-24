<?php 

require_once 'config/database.php';

class AuthModel{

  static function getdata($username)
  {
    global $koneksi;
    $query = "select * from tbusermusic where username='".$username."'";
    $result = mysqli_query($koneksi, $query);
    $data = array();
    if ($result->num_rows > 0) {
      while($a = $result->fetch_array()) {
        $data[]=$a;
      }
    }
    return $data;
  }

  static function register($username, $nama_lengkap, $password, $no_hp)
  {
    global $koneksi;
    
    // Sanitize input
    $username = htmlspecialchars($username);
    $nama_lengkap = htmlspecialchars($nama_lengkap);
    $password = htmlspecialchars($password);
    $no_hp = htmlspecialchars($no_hp);
  
    $query = "insert into tbusermusic (username, nama_lengkap, password, no_hp) values (?,?,?,?)";
    $stmt = $koneksi->prepare($query);
  
    // Now bind the sanitized variables
    $stmt->bind_param("ssss", $username, $nama_lengkap, $password, $no_hp);
  
    $stmt->execute();
    $result = $stmt->affected_rows > 0 ? true : false;
    $stmt->close();
    return $result;
  }
}