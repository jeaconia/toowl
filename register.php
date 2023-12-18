<?php
require 'functions.php';

$conn = mysqli_connect("localhost", "tool", "12345678", "vast_laundry");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["register"])) {
    if(register($_POST, $conn) > 0) {
        echo "<script>
                alert('Akun admin berhasil ditambahkan!')
              </script>";

        header("location: login-admin.php");
    } else { 
        echo mysqli_error($conn);
    }
}
?>

    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Account VASTlaundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar bg-primary-subtle fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <p class="fs-3">VASTlaundry</p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">VASTlaundry</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="homepage.php">Home</a>
              <a class="nav-link active" href="syaratnketentuan.php" aria-current="S&K">Syarat & Ketentuan</a>
              <a class="nav-link" href="lokasi.php">Lokasi</a>
              <a class="nav-link" href="transaksi.php">Info Transaksi</a> </br></br>
              <a class="nav-link" href="index.php">Index</a> 
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>

  </br></br></br></br></br></br>
        <h1>Registrasi</h1>
        <form action="" method="post"> 
            <ul>
                <li>
                    <label for="username">username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <label for="confirm">confirm password :</label>
                    <input type="password" name="confirm" id="confirm">
                </li>
                <li>
                    <button type="submit" name="register">Register</button>
                </li>
            </ul>
        </form> 
    </body>
</html>
