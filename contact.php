<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hubungi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="img/fire.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
       *{
        font-family: 'Raleway', sans-serif;
       }
        .nav-pills li-a:hover{
            background-color: blue;
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

  <?php include 'navbar.php'; ?>

  <div class="col-md-9 mt-5 mb-5 ms-5">
<div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="true" href="#">Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.linkedin.com/in/reyhan-aulia-treeana-24063a25b/" target="_blank">LinkedIn</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <h5 class="card-title">Tentang Pembuat</h5>
      <span class="material-symbols-outlined">
        info
        </span>
      <p class="card-text">Website ini dibuat oleh seorang anak bernama Reyhan Aulia treeana. Lahir di Cicurug pada 3 desember 2006,
        dilahirkan sebagai anak bungsu (terakhir), dengan 2 orang kakak perempuan. Karena hal itu, sifatnya memiliki sedikit unsur unsur feminisme.
        Tetapi sepertinya sekarang sudah tidak, dia tumbuh menjadi pria tangguh sekarang. Saat ini dia bersekolah di SMK Wikrama Bogor, berbekal rasa ingin tahu yang tinggi,
        dia mencoba untuk menaiki puncak sebagai murid yang hebat. Motivasi dan rasa tidak ingin mengecewakan orang tua, dia sangat ingin belajar sungguh sungguh, Memiliki cita-cita untuk pulang kerumah
        dengan sebuah senyuman.
      </p>
      <a href="https://www.instagram.com/ryhaanau/" class="btn btn-primary" target="_blank">Hubungi</a>

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

