<?php
include "koneksi.php";

$id_pelanggan = $_GET['editid'];
$sql="SELECT * FROM tb_pelanggan_kiloan WHERE id_pelanggan='$id_pelanggan'";
$result = mysqli_query($koneksi, $sql);
$row=mysqli_fetch_assoc($result);
    $id_pelanggan = $row['id_pelanggan'];
    $nama_pelanggan = $row['nama_pelanggan'];
    $hp_pelanggan = $row['hp_pelanggan'];
    $jenis_layanan = $row['jenis_layanan'];
    $jumlah_pakaian = $row['jumlah_pakaian'];
    $berat_total = $row['berat_total'];
    $harga_total = $row['harga_total'];
if(isset($_POST['submit'])) { 
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $hp_pelanggan = $_POST['hp_pelanggan'];
    $jenis_layanan= $_POST['jenis_layanan'];
    $jumlah_pakaian= $_POST['jumlah_pakaian'];
    $berat_total= $_POST['berat_total'];
    $harga_total=$_POST['harga_total'];

    $sql="UPDATE tb_pelanggan_kiloan SET id_pelanggan='$id_pelanggan', nama_pelanggan='$nama_pelanggan', hp_pelanggan='$hp_pelanggan',
    jenis_layanan='$jenis_layanan',
    jumlah_pakaian='$jumlah_pakaian',
    berat_total='$berat_total',
    harga_total='$harga_total' WHERE id_pelanggan=$id_pelanggan";
    $result=mysqli_query($koneksi, $sql);
    //echo "data berhasil di update";
    header('location:database-kiloan.php');
} 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Data Pelanggan</title>
  </head>

  <body>
    <div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" placeholder="Masukkan nama pelanggan" name="nama_pelanggan" autocomplete="off" value=<?php echo $nama_pelanggan; ?> >
        </div>
        <br>
        <div class="form-group">
            <label class="form-label">No HP</label>
            <input type="text" class="form-control" placeholder="Masukkan nomor HP" name="hp_pelanggan" autocomplete="off" value=<?php echo $hp_pelanggan; ?>>
        </div>
        <br>
        <div class="form-group">
            <label class="form-label">Jenis Layanan</label>
            <select name="jenis_layanan">
            <option value="Reguler">Reguler</option>
            <option value="Express">Express</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label class="form-label">Jumlah Pakaian</label>
            <input type="text" class="form-control" placeholder="Masukkan jumlah pakaian" name="jumlah_pakaian" autocomplete="off" value=<?php echo $jumlah_pakaian; ?>>
        </div>
        <br>
        <div class="form-group">
            <label class="form-label">Berat</label>
            <input type="text" class="form-control" placeholder="Masukkan berat total" name="berat_total" autocomplete="off" value=<?php echo $berat_total; ?>>
        </div>
        <br>
        <div class="form-group">
            <label class="form-label">Harga Total</label>
            <input type="text" class="form-control" placeholder="Masukkan harga total" name="harga_total" autocomplete="off" value=<?php echo $harga_total; ?>>
        </div>
        <br>
        <button type="submit" class="btn btn-primary"name="submit">Update</button>
    </form>
    </div>
  </body>

</html>