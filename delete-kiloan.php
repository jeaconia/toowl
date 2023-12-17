<?php
include 'koneksi.php';
if(isset($_GET['deleteid'])) {
  $id_pelanggan = $_GET['deleteid'];
  
  $sql = "DELETE FROM tb_pelanggan_kiloan WHERE id_pelanggan='$id_pelanggan'";
  $result=mysqli_query($koneksi, $sql);
  if($result) {
    //echo "Data berhasil dihapus";
    header('location:database-kiloan.php');
  } else {
    die(mysqli_error($koneksi));
  }
}
?>