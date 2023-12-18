<?php
    include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaksi VASTlaundry</title>
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
            <a class="nav-link" href="syaratnketentuan.php">Syarat & Ketentuan</a>
            <a class="nav-link" href="lokasi.php">Lokasi</a>
            <a class="nav-link active" href="transaksi.php"aria-current="Informasi Transaksi">Info Transaksi</a>
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

<div class="container mx-auto p-2 text-center" style="width: 800px;">
  <form class="d-flex mt-3" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</div>

</br></br>
<div class="container mx-auto p-2" style="width: 700px;">
  <?php
    $sql="SELECT * FROM tb_sepatu;";
    $result=mysqli_query($koneksi, $sql);
    if($result) {
        while($row=mysqli_fetch_assoc($result)) {
            $id_pelanggan = $row['id_pelanggan'];
            $nama_pelanggan = $row['nama_pelanggan'];
            $hp_pelanggan = $row['hp_pelanggan'];
            $jenis_layanan = $row['jenis_layanan'];
            $jumlah_pakaian = $row['jumlah_pakaian'];
            $harga_total = $row['harga_total'];
            echo '<div class="card">
                    <div class="card-header">
                      ID Pemesanan: ' . $id_pelanggan . '<br>
                      Nama Pelanggan: ' . $nama_pelanggan .'
                    </div>
                    <div class="card-body">
                      <p class="card-text">
                        No. HP Pelanggan: ' . $hp_pelanggan . '<br>
                        Jenis Layanan: ' . $jenis_layanan . '<br>
                        Jumlah Pakaian: ' . $jumlah_pakaian . '<br>
                        Harga Total: ' . $harga_total . '</p>
                    </div>
                  </div>
                  <br>';
        }

    }
  ?>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>