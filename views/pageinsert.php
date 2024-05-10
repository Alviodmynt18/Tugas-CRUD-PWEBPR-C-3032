<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Music</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/pageinsert.css">
    <link rel="stylesheet" href="views/css/sidebar.css">

    <script src="../js/script.js" defer></script>
    <script>
    function validateForm() {
      var ID_music = document.getElementById("ID_music").value;
      var Judul_music = document.getElementById("Judul_music").value;
      var Gambar_album = document.getElementById("Gambar_album").value;
      var Nama_penyanyi = document.getElementById("Nama_penyanyi").value;
      var Deskripsi = document.getElementById("Deskripsi").value;
      var Link_music = document.getElementById("Link_music").value;

      if (ID_music.length > 5) {
        alert("Input Id music exceeds the maximum limit of 5 characters");
        return false;
      }
      if (Judul_music.length > 20) {
        alert("Input Judul music exceeds the maximum limit of 20 characters");
        return false;
      }
      if (Gambar_album.length > 100) {
        alert("Input Gambar album exceeds the maximum limit of 20 characters");
        return false;
      }
      if (Nama_penyanyi.length > 12) {
        alert("Input Nama penyanyi exceeds the maximum limit of 12 characters");
        return false;
      }
      if (Deskripsi.length > 50) {
        alert("Input Deskripsi exceeds the maximum limit of 50 characters");
        return false;
      }
      if (Link_music.length > 200) {
        alert("Input Link music exceeds the maximum limit of 200 characters");
        return false;
      }

      if (ID_music.trim() === '' || Judul_music.trim() === '' || Gambar_album.trim() === '' || Nama_penyanyi.trim() === '' || Deskripsi.trim() === '' || Link_music.trim() === '') {
        alert("Please fill in all fields.");
        return false;
      }
      return true;
    }
</script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar with profile and menu -->
        <div class="sidebar">
            <div class="profile">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="profile_picture">
                <h3 class="username"></h3>
                <p class="phone"></p>
            </div>
            <ul style="padding-left:0;">
                <li>
                    <a href="dashboard" class="dashboard" style="text-decoration:none;">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="pageinsert" class="insert" style="text-decoration:none;">
                        <span class="icon"><i class="fa-regular fa-pen-to-square"></i></span>
                        <span class="item">Insert Playlist</span>
                    </a>
                <li>
                    <a href="index" class="logout" style="text-decoration:none;">
                        <span class="iconn"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="item">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Top Navbar with Hamburger Icon -->
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <!-- Table Data -->
            <div class="container" style="display:flex; flex-direction:column;">
                <h1 class="h1 text-center fw-bold p-3 mt-5">INSERT PLAYLIST MUSIC</h1>
                <table>
                    <tr>
                        <td>
                            <form action = "insert" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                                <div class="form-group fw-bold fs-4">
                                    <label for="IdMusic">ID Music</label><br>
                                    <input type="text" name="ID_music" id="ID_music">
                                </div>
                                <div class="form-group fw-bold fs-4">
                                    <label for="Judul_music">Judul Music</label>
                                    <input type="text" name="Judul_music" id="Judul_music">
                                </div>
                                <div class="form-group fw-bold fs-4">
                                    <label for="gambar">Gambar Album</label>
                                    <input type="file" name="Gambar_album" id="Gambar_album" accept="image/jpg, image/jpeg, image/png">
                                </div>
                                <div class="form-group fw-bold fs-4">
                                    <label for="Singer">Nama Penyanyi</label>
                                    <input type="text" name="Nama_penyanyi" id="Nama_penyanyi">
                                </div>
                                <div class="form-group fw-bold fs-4">
                                    <label for="Deskripsi">Deskripsi</label><br>
                                    <input type="text" name="Deskripsi" id="Deskripsi">
                                </div>
                                <div class="form-group fw-bold fs-4">
                                    <label for="Link_music">Link Music</label>
                                    <input type="text" name="Link_music" id="Link_music">
                                </div>
                                <div class="form_action--button text-left">
                                    <button type="submit" class="btn-success fs-5 p-3 rounded">Submit</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>
    <script>
        var hamburger = document.querySelector('.hamburger');
        hamburger.addEventListener('click', function() {
            document.querySelector('body').classList.toggle('active');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>