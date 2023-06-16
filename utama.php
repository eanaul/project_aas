<?php
session_start();
  if (!isset($_SESSION["username"])) {
	  echo "<script>alert('Anda Harus Login Terlebih Dahulu!');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
	exit;
}
?>
  <?php
  $server = mysqli_connect("localhost", "root", "", "peminjaman");

  if ($server) {
    echo "";
  } else {
    echo "Gagal";
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
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="img/fire.png">
    <style>
       *{
        font-family: 'Raleway', sans-serif;
       }
        .nav-pills li-a:hover{
            background-color: blue;
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
              <img class="rounded mx-auto d-block mt-5 mb-5" src="img/<?= $tampil['img']; ?>" alt="" width="150px">
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
              <div class="col-md-12 mt-5 ms-3 mb-5">
                <h4>Selamat Datang di Wes<span class="jud1 text-primary">Bluemarine</span>!</h4>
                <h1><?php echo $tampil['nama']; ?></h1>
                <h4><?php echo $tampil['rayon']; ?> | <?php echo $tampil['rombel']; ?> | <?php echo $tampil['nis']; ?></h4>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mt-5 mb-5 ms-3">
                <h1>Mau Pinjam Apa Hari Ini?</h1>
                <hr class="border border-secondary border-2 opacity-50">
              </div>
            </div>
            <div class="row ms-3">
              <div class="col-md-3 col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img class="card-img-top" src="img/lepi.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Leptop Lohnopo</h5>
                    <p class="card-text">Build quality lohnopo yang bagus tak terkalahkan dan terjamin.</p>
                    <a href="jenis_laptop/lohnopo.php" class="btn btn-primary">Cek Peminjaman</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img class="card-img-top" src="img/lepi.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Leptop Pacer</h5>
                    <p class="card-text">Pacer ga kalah bagus, tapi ga terlalu bagus dari merek lohnopo.</p>
                    <a href="jenis_laptop/pacer.php" class="btn btn-primary">Cek Peminjaman</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img class="card-img-top" src="img/lepi.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Leptop Oasis</h5>
                    <p class="card-text">Laptop sejuta umat, ini keren bikin user jadi keceh bak badai berlalu</p>
                    <a href="/peminjaman" class="btn btn-primary">Cek Peminjaman</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img class="card-img-top" src="img/lepi.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Leptop Ehape</h5>
                    <p class="card-text">Laptop bagus, sering dipake programmer kece seperti asep</p>
                    <a href="/peminjaman" class="btn btn-primary">Cek Peminjaman</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
      <?php

  } 

}

  ?>


      


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

        


