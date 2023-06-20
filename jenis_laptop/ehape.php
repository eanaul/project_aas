<?php
$tanggal = date('d-m-Y');
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peminjaman</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/fire.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
       *{
        font-family: 'Raleway', sans-serif;
       }
        .nav-pills li-a:hover{
            background-color: blue;
        }

        .pagi{
          margin-top: 50px;
        }

        .jud2{
          font-size: 70px;
          font-weight: bold;
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

  <?php include 'nav_lap.php'; ?>

    <div class="col-md-5 col-lg-8">
            <div class="row">
              
            </div>
            <div class="row">
              <div class="col-md-12 mt-5 mb-5 ms-3 fw-3">
                <h1 style="font-size: 70px;">Laptop <span class="jud2">HP</span></h1>
                <hr class="border border-secondary border-2 opacity-50">
              </div>
            </div>
            <div class="row ms-3">
              <div class="col-md-3 col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img class="card-img-top" src="../img/lepi.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">HP Zeppelin445</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo modi expedita veniam? Incidunt, error!</p>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPinjam">
                        Pinjam
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail">
                      Detail
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img class="card-img-top" src="../img/lepi.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">HP Stones56</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ex enim veniam consequatur officiis!</p>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPinjam">
                        Pinjam
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail">
                      Detail
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img class="card-img-top" src="../img/lepi.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">HP Oasis345</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias sapiente laborum, fugit voluptate quam dolor.</p>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPinjam">
                        Pinjam
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail">
                      Detail
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-lg-3">
                <div class="card" style="width: 15rem;">
                  <img class="card-img-top" src="../img/lepi.webp" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">HP PinkFlo56</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, cupiditate autem?</p>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPinjam">
                        Pinjam
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail">
                        Detail
                    </button>
                  </div>
                </div>
              </div>
              <?php include 'pagination.php'; ?>
            </div>
            <!-- modal pop up -->
            <?php include ('../detail.php'); ?>
          <!-- Button trigger modal -->
          
    <!-- Modal -->
    <div class="modal fade " id="modalPinjam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Jenis apa dan isi alasan peminjaman</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="../barpin.php" method="POST">
          <div class="modal-body">
            <div class="mb-3">
            <label for="jem" class="form-label">Tanggal: <?= $tanggal ?></label> </br>
            <label for="jem" class="form-label">Jenis & Merek</label>
              <select class="form-select" name="jem" id="jem" aria-label="Default select example">
                <option selected value="HP Zeppelin445">Zeppelin445</option>
                <option value="HP Stones56">Stones56</option>
                <option value="HP Oasis345">Oasis345</option>
                <option value="HP PinkFlo56">PinkFlo56</option>
              </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alasan</label>
                <textarea class="form-control" name="alasan" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" name="iya">Pinjam</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  <!-- Akhir modal -->

          </div>
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


