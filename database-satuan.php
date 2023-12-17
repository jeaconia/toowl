<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Database Pelanggan VASTlaundry</title>
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
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ANUlaundry</h5>
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
        <div class="container">

            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Pemesanan</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">No. HP</th>
      <th scope="col">Jenis Layanan</th>
      <th scope="col">Jumlah Pakaian</th>
      <th scope="col">Berat Total</th>
      <th scope="col">Harga Total</th>
      <th scope="col">Pengaturan</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sql="SELECT * FROM tb_pelanggan;";
    $result=mysqli_query($koneksi, $sql);
    if($result) {
        while($row=mysqli_fetch_assoc($result)) {
            $id_pelanggan = $row['id_pelanggan'];
            $nama_pelanggan = $row['nama_pelanggan'];
            $hp_pelanggan = $row['hp_pelanggan'];
            $jenis_layanan = $row['jenis_layanan'];
            $jumlah_pakaian = $row['jumlah_pakaian'];
            $berat_total = $row['berat_total'];
            $harga_total = $row['harga_total'];
            echo '<tr>
            <th scope="row">'.$id_pelanggan.'</th>
            <td>'.$nama_pelanggan.'</td>
            <td>'.$hp_pelanggan.'</td>
            <td>'.$jenis_layanan.'</td>
            <td>'.$jumlah_pakaian.'</td>
            <td>'.$berat_total.'</td>
            <td>'.$harga_total.'</td>
            <td>
                <button class="btn btn-primary"><a href="edit.php? editid='.$id_pelanggan.'" class="text-light">Edit</a></button>
                <button class="btn btn-danger"><a href="delete.php? deleteid='.$id_pelanggan.'" class ="text-light">Delete</a></button>
            </td>
          </tr>';
        }

    }
  ?>
  </tbody>
</table>
            <button class="btn btn-primary my-5"><a href="data.php" class="text-light">Tambah Data</a>
            </button>
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