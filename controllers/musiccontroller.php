<?php 
require_once "../model/music.php";
require_once "../function/function.php";
require_once "../config/database.php";

class MusicController {
  
  public function select() {
    $data = music::select();
    loadView('playlistmusic', $data);
  }

  public function insert() {
    global $url;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $insert = music::insert($_POST["ID_music"], $_POST["Judul_music"], $_FILES["Gambar_album"], $_POST["Nama_penyanyi"], $_POST["Deskripsi"], $_POST["Link_music"]);

      if ($insert) {
        $namaFile = $_FILES["Gambar_album"]["name"];
        $direktoriTujuan = __DIR__ . "/image/";

        if (!empty($namaFile) && move_uploaded_file($_FILES["Gambar_album"]["tmp_name"], $direktoriTujuan . $namaFile)) {
          header("Location: " . $url . "/dashboard");
          exit();
        } else {
          echo "Gagal menyimpan gambar.";
        }
      } else {
        echo "Gagal menambah data";
      }
    } else {
      echo "Metode yang digunakan bukan metode POST";
    }
  }

  public function update() {
    global $url;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $update = music::update($_POST["ID_music"], $_POST["Judul_music"], $_FILES["Gambar_album"], $_POST["Nama_penyanyi"], $_POST["Deskripsi"], $_POST["Link_music"]);

      if ($update) {
        $namaFile = $_FILES["Gambar_album"]["name"];
        $direktoriTujuan = __DIR__ . "/image/";

        if (!empty($namaFile) && move_uploaded_file($_FILES["Gambar_album"]["tmp_name"], $direktoriTujuan . $namaFile)) {
          header("Location: " . $url . "/dashboard");
          exit();
        } else {
          echo "Gagal menyimpan gambar.";
        }
      } else {
        echo "Gagal mengupdate data";
      }
    } else {
      echo "Metode yang digunakan bukan metode POST";
    }
  }

  public function pageupdate($Id_music) {
    $data = music::detail($Id_music);
    loadView('updateplaylistmusic', $data);
  }

  public function delete($Id_music) {
    global $url;
    $delete = music::delete($Id_music);
    header("Location:" . $url . "/dashboard");
  }

  public function pageinsert() {
    loadView('insertplaylistmusic');
  }

  public function detail($Id) {
    $data = music::detail($Id);
    return $data;
  }

  public function dashboard() {
    loadView('dashboard');
  }

  public function login() {
    loadView('login');
  }

  public function register() {
    loadView('register');
  }
}
?>
