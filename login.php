<?php 
 

$conn = mysqli_connect("localhost", "root", "", "peminjaman");
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: utama.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
 
    $sql = "SELECT * FROM data WHERE username='$username' AND pass='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: utama.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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

    

 
      
        <h1 class="jud text-white mt-5 ms-5" position="absolute">
        WesBluemarine</span>
      </h1>
      
      <h3 class="judi text-white ms-5">
        Bantu Peminjaman kamu jadi lebih mudah!
      </h3>
      
      
    
      
  

      <div class="row-md-5">
            <div class="cardlog col-md-6 offset-md-6 d-flex align-items-center justify-content-center">
              <div class="login card border-0 shadow rounded-4 my-1">
                <div class="card-body p-5 p-sm-12">
                    <img src="img/WIKRAMA LOGO 2.png" class="rounded mx-auto d-block mb-4" alt="wikr" width="80px">
                        <h3 class="card-title text-left mb-5 fs-2 text-secondary">Silahkan login terlebih dahulu </h3>
        <?php if(isset($error)) { ?>
            <p style="color: red; font-style: italic; padding-bottom: 5px;">username / password salah!</p>
        <?php } ?>
                  <form action="" method="post">
                    <div class="form-floating mb-5">
                      <input type="text" name="username" class="form-control" id="username" placeholder="Username" autofocus required >
                      <label for="usn">Username</label>
                    </div>
                    <div class="form-floating mb-5">
                      <input type="password" name="pass"  class="form-control" id="pass" placeholder="Password" required >
                      <label for="pass">Password</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <!-- <a href="utama.php"> -->
                      <button type="submit" name="submit" class="btn btn-primary btn-login text-uppercase fw-bold">Masuk</button>
                        </a>    
                    </div>
                  </form>
                  <div class="ms-2 mt-5">
                  <p>Belum punya akun? <a href="register.php">Daftar</a></p>
                  </div>
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