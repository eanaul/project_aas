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

  $sql    = ("SELECT * FROM data WHERE username='$_SESSION[username]'");
  $result = mysqli_query($server, $sql);
  ?>

  <?php


  if (mysqli_num_rows($result) > 0) {

    while ($tampil = mysqli_fetch_assoc($result)) {
  ?>



<div class="container-fluid">
    <div class="row flex-nowrap">
      <div class="bg-primary col-auto col-md-4 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
        <div class="bg-primary p-2">
          <a class="text-decoration-none mt-1 align-items-center text-white">
            <span class="fs-4 d-none d-sm-inline text-center">
              <img class="rounded mx-auto d-block mt-5 mb-5" src="../img/1255974.png" alt="" width="150px">
            </span>
          </a>
          <hr class="border border-white border-2 opacity-50">
          <ul class="nav nav-pills flex-column mt-4">
            <li class="nav-item py-2 py-sm-0">
              <a href="../utama.php" class="nav-link  text-white">
                <span class="material-symbols-outlined">
                  home
                </span><span class="fs-4 d-none ms-2 d-sm-inline">Utama</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 mt-3">
              <a href="lohnopo.php" class="nav-link text-white">
                <span class="material-symbols-outlined">
                  check_circle
                </span><span class="fs-4 d-none ms-2 d-sm-inline">Peminjaman</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 mt-3">
              <a href="../contact.php" class="nav-link text-white">
                <span class="material-symbols-outlined">
                  phone_in_talk
                </span><span class="fs-4 d-none ms-2 d-sm-inline">Contact</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 mt-3">
              <a href="../dipinjam.php" class="nav-link text-white">
              <span class="material-symbols-outlined">
                  radio_button_checked
              </span><span class="fs-4 d-none ms-2 d-sm-inline">Dipinjam</span>
              </a>
            </li>
            <li class="nav-item py-2 py-sm-0 mt-3">
            <a href="../edit.php" class="nav-link text-white">
          <span class="material-symbols-outlined">
              settings
          </span> <span class="fs-4 d-none ms-2 d-sm-inline">Pengaturan</span>
          </a>
            </li>
          </ul>
        </div>
        <div class="logout text-white">
          <a href="../logout.php" class="nav-link text-white">
            <span class="material-symbols-outlined">
              logout
            </span><span class="fs-4 d-none ms-2 d-sm-inline">Logout</span>
          </a>
        </div>
    </div>


    <?php

} 

}

?>