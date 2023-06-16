<?php 
 

$conn = mysqli_connect("localhost", "root", "", "peminjaman");
//koneksi ke database

//cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//memeriksa apakah form sudah disubmit
if (isset($_POST['submit'])) {
    //mengambil nilai dari form
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $rombel = $_POST["rombel"];
    $rayon = $_POST["rayon"];
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $img = $_POST["img"];
    
    //memeriksa apakah username sudah terdaftar di database
    $sql = "SELECT * FROM data WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        //jika username sudah terdaftar, tampilkan pesan error
        echo "<script>
        alert('Username sudah terdaftar');
        </script>";
        
    } else {
        //jika username belum terdaftar, lakukan pendaftaran
        $sql = "INSERT INTO data (`nis`, `nama`, `rombel`, `rayon`, `username`, `pass`, `img`) VALUES ('$nis', '$nama', '$rombel', '$rayon', '$username', '$password', '$img')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
            alert('Berhasil di daftar!')
            </script>";
            header("location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="img/fire.png">
    <style>

        *{
        font-family: 'Raleway', sans-serif;
       }

        body{
            background-image: url(/img/bg.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
  }
        
        .cardlog{
            padding-top: 2px;
        }

        .card{
            padding-bottom: 35px;
            padding-top:20px;
            position: relative;
        }

        .jud{
            font-size: 60px;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body class="bg-image" style="background-image: url(img/bg.png);">

      <div class="row-md-4 ">
            <div class="cardlog col-md-4 offset-md-4 d-flex align-items-center justify-content-center">
              <div class="login card border-0 shadow rounded-4 my-1">
                <div class="card-body ps-5 pe-5 pt-2 p-sm-12">
                    <img src="img/WIKRAMA LOGO 2.png" class="rounded mx-auto d-block mb-5" alt="wikr" width="80px">
                        <h3 class="card-title text-left mb-5 fs-2 text-black">Daftar Wes<span class="jud1 text-primary">Bluemarine!</span> </h3>
     
<form action="" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="ex: han">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="pass" id="inputPassword4" placeholder="ex: 123">
    </div>
  </div>
  <div class="form-group">
    <label for="nama">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" id="nama" placeholder="ex: Mike Bajaj">
  </div>
  <div class="form-group">
    <label for="nis">NIS</label>
    <input type="number" class="form-control" name="nis" id="nis" placeholder="ex: 122089">
  </div>
  <div class="form-row">
    <div class="form-group">
      <label for="rombel">Rombel</label>
      <input type="text" class="form-control" name="rombel" id="rombel">
    </div>
    <div class="form-group">
      <label for="rayon">Rayon</label>
      <input type="text" class="form-control" name="rayon" id="rayon">
      </select>
    </div>
    <div class="form-group">
      <label for="img">Gambar</label>
      <input type="file" class="form-control" name="img" id="img">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
</form>
<div class="ms-2 mt-3">
                  <p>Sudah punya akun? <a href="login.php">Login</a></p>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      



    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>