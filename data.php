<?php
include "koneksi.php";

$insert_pelanggan = false;

if(isset($_POST['submit'])){
    mysqli_query($koneksi, "insert into tb_pelanggan set 
    nama_pelanggan = '$_POST[nama_pelanggan]',
    hp_pelanggan = '$_POST[hp_pelanggan]',
    jenis_layanan= '$_POST[jenis_layanan]',
    jumlah_pakaian= '$_POST[jumlah_pakaian]',
    berat_total= '$_POST[berat_total]',
    harga_total='$_POST[harga_total]'");

    header('location:database.php');
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
            <input type="text" class="form-control" placeholder="Masukkan nama pelanggan" name="nama_pelanggan" autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label class="form-label">No HP</label>
            <input type="text" class="form-control" placeholder="Masukkan nomor HP" name="hp_pelanggan" autocomplete="off">
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
            <input type="text" class="form-control" placeholder="Masukkan jumlah pakaian" name="jumlah_pakaian">
        </div>
        <br>
        <div class="form-group">
            <label class="form-label">Berat</label>
            <input type="text" class="form-control" placeholder="Masukkan berat total" name="berat_total" autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label class="form-label">Harga Total</label>
            <input type="text" class="form-control" placeholder="Masukkan harga total" name="harga_total" autocomplete="off">
        </div>
        <br>
        <button type="submit" class="btn btn-primary"name="submit">Submit</button>
    </form>
    </div>
  </body>

</html>