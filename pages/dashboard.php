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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css">

    <script src="../js/script.js" defer></script>
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
                    <a href="#" class="active" style="text-decoration:none;">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="../index.php" class="logout" style="text-decoration:none;">
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
                <table>
                    <tr>
                        <td>
                            <form autocomplete="off" onsubmit="onFormSubmit()">
                                <div class="form-group fw-bold fs-4">
                                    <label for="IdMusic">ID Music</label>
                                    <input type="text" name="IdMusic" id="IdMusic">
                                </div>
                                <div class="form-group fw-bold fs-4">
                                    <label for="JudulMusic">Judul Music</label>
                                    <input type="text" name="JudulMusic" id="JudulMusic">
                                </div>
                                <div class="form-group fw-bold fs-4">
                                    <label for="Singer">Nama Penyanyi</label>
                                    <input type="text" name="Singer" id="Singer">
                                </div>
                                <div class="form-group fw-bold fs-4">
                                    <label for="Deskripsi">Deskripsi</label>
                                    <input type="text" name="Deskripsi" id="Deskripsi">
                                </div>
                                <div class="form-group fw-bold fs-4">
                                    <label for="LinkMusic">Link Music</label>
                                    <input type="text" name="LinkMusic" id="LinkMusic">
                                </div>
            
                                <div class="form_action--button text-left">
                                    <button type="submit" class="btn btn-success fs-5 p-3 rounded">Submit</button>
                                </div>
                            </form>
            
                            <td>
                                <table class="list" id="storeList">
                                    <thead>
                                        <tr>
                                            <th>ID Music</th>
                                            <th>Judul Music</th>
                                            <th>Nama Penyanyi</th>
                                            <th>Deskripsi</th>
                                            <th>Link Music</th>
                                            <th>Owner</th>
                                            <th>No Hp</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </td>
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
    <script src="../js/dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


