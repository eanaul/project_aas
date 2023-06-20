<?php

session_start();
if (!isset($_SESSION["username"])) {
  echo "<script>alert('Anda Harus Login Terlebih Dahulu!');</script>";
  echo "<script>window.location.href = 'index.php';</script>";
exit;
}

  $server = mysqli_connect("localhost", "root", "", "peminjaman");

  if ($server) {
    echo "";
  } else {
    echo "Gagal";
  }

    if(isset($_POST["submit"])){

    $nis = $_POST['nis']; //tangkap variabel yang tadi dikirim dengan <form>
    $nama = $_POST['nama'];
    $rombel = $_POST['rombel'];
    $rayon = $_POST['rayon'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $img = $_POST['img'];


    $cuy = "UPDATE `data` SET `nis`='$nis',`nama`='$nama',`rombel`='$rombel',`rayon`='$rayon',`username`='$username',`pass`='$pass',`img`='$img' WHERE `username` = '$username'";
$myquery = mysqli_query($server, $cuy);



if($myquery) {
    echo "
    <script>
    alert('Data berhasil diubah!');
    document.location.href = 'utama.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data gagal ditambah cuy!')
    </script>
    ";
}

}

  $sql    = ("SELECT * FROM data WHERE username='$_SESSION[username]'");
  $result = mysqli_query($server, $sql);
  ?>

  <?php



  if (mysqli_num_rows($result) > 0) {

    while ($tampil = mysqli_fetch_assoc($result)) {
  ?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="img/fire.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      * {
        font-family: 'Raleway', sans-serif;
      }
      
      html, body {
        height: 100%;
        margin: 0;
        overflow: hidden;
      }
      
      .container {
        height: 100%;
        display: flex;
        margin-top: 20px;

      }
      
      .form-container {
        max-width: 400px;
        padding: 20px;

        border-radius: 5px;
      }
      
      .form-container input[type="file"] {
        overflow: hidden;
      }
      
      .form-container button[type="submit"] {
        width: 100%;
      }
      
      .form-container label {
        margin-bottom: 5px;
      }
      
      .form-container .form-group {
        margin-bottom: 15px;
      }

      .loader-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: #242f3f;
  display: flex;
  justify-content: center;
  align-items: center;
}

.loader {
  display: inline-block;
  width: 30px;
  height: 30px;
  position: relative;
  border: 4px solid #Fff;
  animation: loader 3s infinite ease;
}

.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}

@keyframes loader {
  0% {
    transform: rotate(0deg);
  }

  25% {
    transform: rotate(180deg);
  }

  50% {
    transform: rotate(180deg);
  }

  75% {
    transform: rotate(360deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes loader-inner {
  0% {
    height: 0%;
  }

  25% {
    height: 0%;
  }

  50% {
    height: 100%;
  }

  75% {
    height: 100%;
  }

  100% {
    height: 0%;
  }
}
    </style>
  </head>
  <body>

  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="bg-primary col-auto col-md-4 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
        <div class="bg-primary p-2">
          <a class="text-decoration-none mt-1 align-items-center text-white">
            <span class="fs-4 d-none d-sm-inline text-center">
              <img class="rounded mx-auto d-block mt-5 mb-5" src="img/1255974.png" alt="" width="150px">
            </span>
          </a>
          <hr class="border border-white border-2 opacity-50">
          <ul class="nav nav-pills flex-column mt-4">
            <li class="nav-item py-2 py-sm-0">
              <a href="utama.php" class="nav-link  text-white">
                <span class="material-symbols-outlined">
                  home
                </span><span class="fs-4 d-none ms-2 d-sm-inline">Utama</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 mt-3">
              <a href="jenis_laptop/lohnopo.php" class="nav-link text-white">
                <span class="material-symbols-outlined">
                  check_circle
                </span><span class="fs-4 d-none ms-2 d-sm-inline">Peminjaman</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 mt-3">
              <a href="contact.php" class="nav-link text-white">
                <span class="material-symbols-outlined">
                  phone_in_talk
                </span><span class="fs-4 d-none ms-2 d-sm-inline">Contact</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 mt-3">
              <a href="dipinjam.php" class="nav-link text-white">
              <span class="material-symbols-outlined">
                  radio_button_checked
              </span><span class="fs-4 d-none ms-2 d-sm-inline">Dipinjam</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 mt-3">
            <a href="edit.php" class="nav-link text-white">
          <span class="material-symbols-outlined">
              settings
          </span> <span class="fs-4 d-none ms-2 d-sm-inline">Pengaturan</span>
          </a>
            </li>
          </ul>
          
        </div>
        <div class="logout text-white">
          <a href="logout.php" class="nav-link text-white">
            <span class="material-symbols-outlined">
              logout
            </span><span class="fs-4 d-none ms-2 d-sm-inline">Logout</span>
          </a>
        </div>
    </div>


    <div class="col-md-5 col-lg-8">
            <div class="row">
              <div class="col-md-12 mt-5  ms-3 fw-3">
                <h1 style="font-size: 50px;">Edit data anda disini!</span></h1>
                <hr class="border border-secondary border-2 opacity-50">
              </div>
            </div>



            <div class="container">
  <div class="form-container">
    <form action="" method="POST">
      <div class="form-row">
        <div class="form-group col-md-10">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" value="<?= $tampil['username']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="text" class="form-control" name="pass" id="inputPassword4" value="<?= $tampil['pass']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" id="nama" value="<?= $tampil['nama']; ?>">
        </div>
        <div class="form-group col-md-12">
          <label for="nis">NIS</label>
          <input type="number" class="form-control" name="nis" id="nis" value="<?= $tampil['nis']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="rombel">Rombel</label>
          <input type="text" class="form-control" name="rombel" id="rombel" value="<?= $tampil['rombel']; ?>">
        </div>
        <div class="form-group col-md-12">
          <label for="rayon">Rayon</label>
          <input type="text" class="form-control" name="rayon" id="rayon" value="<?= $tampil['rayon']; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="img">Gambar</label>
        <input type="file" class="form-control" name="img" id="img" value="<?= $tampil['img']; ?>">
      </div>
      <div class="form-group col-md-6">
      <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
      </div>
    </form>
  </div>
</div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div>

  <script>
    $(window).on("load",function(){
      $(".loader-wrapper").fadeOut("slow");
    });
  </script>
</body>
</html>

<?php

} 

}

?>