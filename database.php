<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Database Pelanggan</title>
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary my-5"><a href="data.php" class="text-light">Tambah Data</a>
            </button>

            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Pelanggan</th>
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
        </div>


    </body>
</html>