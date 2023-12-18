<?php
require 'functions.php';

$conn = mysqli_connect("localhost", "tool", "12345678", "vast_laundry");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT username, password FROM tb_register WHERE username = '$username'");

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $row["password"])) {
            header("Location: homepage-kryw.php");
            exit;
        }
    }

    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login VASTlaundry</title>
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

</br></br></br></br></br>

        <div class="container py-4 py-md-5 px-4 px-md-3 text-center">
        <h1>Login</h1> </br>
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username atau password salah!</p>
        <?php endif; ?>

        <form action="" method="post">
                <a>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </a>
                </br></br>
                <a>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </a>
                </br></br>
                <a>
                    <button type="submit" name="login">Login</button>
                </a>
        </div>

                <footer class="bd-footer py-4 py-md-5 mt-5 bg-primary-subtle">
      <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary text-center">
        <a href="homepage.php">All Rights Reserved ©VASTlaundry 2023</a></br></br></br>
        <div class="row align-items-center">
          <a class="col fs-6" href="https://youtu.be/dQw4w9WgXcQ?si=pX8mEhsOMYARGLf3">
            Instagram
          </a>
          <a class="col fs-6" href="https://youtu.be/BbeeuzU5Qc8?si=crrkoGANXCXw-Xrd">
            Whatsapp
          </a>
          <a class="col fs-6" href="https://youtu.be/n4kluqkCymw?si=DWRcIm0MtOOhOiNp">
            Line
          </a>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>