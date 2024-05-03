<?php
include "../model/music.php";
$musicdata = music::select();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Music</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/css/dashboard.css">
    <link rel="stylesheet" href="../views/css/sidebar.css">

    <!-- <script src="../js/script.js" defer></script> -->
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
                    <a href="dashboard.php" class="dashboard" style="text-decoration:none;">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="pageinsert.php" class="insert" style="text-decoration:none;">
                        <span class="icon"><i class="fa-regular fa-pen-to-square"></i></span>
                        <span class="item">Insert Playlist</span>
                    </a>
                </li>
                <li>
                    <a href="index.php" class="logout" style="text-decoration:none;">
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
                <h1 class="h1 text-center fw-bold p-3 mt-5">PLAYLIST MUSIC</h1>
                <div class="insert-data">
                    <a href="pageinsert.php" class="btn btn-primary">Insert</a>
                </div>
                <table id="storeList">
                    <tr>
                        <th>ID Music</th>
                        <th>Judul Music</th>
                        <th>Gambar Album</th>
                        <th>Nama Penyanyi</th>
                        <th>Deskripsi</th>
                        <th>Link Music</th>
                        <th>Owner</th>
                        <th>No Hp</th>
                        <th>Opsi</th>
                    </tr>
                    <?php
                    foreach ($musicdata as $row) {
                    ?>
                    <tr>
                        <td><?= $row["ID_music"]; ?></td>
                        <td><?= $row["Judul_music"]; ?></td>
                        <td><image style = "width:100px;" src="/Tugas-CRUD-PWEBPR-C-3032/controllers/image/<?php echo $row["Gambar_album"]; ?> "></td>
                        <td><?= $row["Nama_penyanyi"]; ?></td>
                        <td><?= $row["Deskripsi"]; ?></td>
                        <td>
                        <a href="<?= $row["Link_music"]; ?>" class="btn btn-success p-3 rounded text-white" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.669 11.538a.5.5 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686m.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858m.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288"></path>
                            </svg> Link Music
                        </a>
                            
                        </td>
                        <td><?= $row["Owner"]; ?></td>
                        <td><?= $row["No_hp"]; ?></td>
                        <td>
                            <a href="pageupdate.php?Id=<?= $row["ID_music"]; ?>" class="btn-update">Update</a> 
                            <a href="/deleteplaylistmusic/<?= $row["ID_music"]; ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                        </td>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
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