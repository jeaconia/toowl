<h3> Tambah Pelanggan </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="130">Nama Pelanggan</td>
        <td><input type="text" name="nama_pelanggan"></td>
    </tr>
    <tr>
        <td width="130">No HP Pelanggan</td>
        <td><input type="text" name="hp_pelanggan"></td>
    </tr>
    <tr>
        <td width="130">Jenis Layanan</td>
        <td>
            <select name="jenis_layanan">
            <option value="Reguler">Reguler</option>
            <option value="Express">Express</option>
            </select>
        </td>
    </tr>
    <tr>
        <td width="130">Harga/kg</td>
        <td><input type="text" name="harga_layanan"></td>
    </tr>
    <tr>
        <td width="130">Jumlah Pakaian</td>
        <td><input type="text" name="jumlah_pakaian"></td>
    </tr>
    <tr>
        <td width="130">Harga Total</td>
        <td><input type="text" name="harga_total"></td>
    </tr>
    <tr>
        <td width="130">Diskon</td>
        <td><input type="text" name="diskon_harga"></td>
    </tr>
    <tr>
        <td width="130">Harga Bayar</td>
        <td><input type="text" name="harga_bayar"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Submit" name="proses"></td>
    </tr>
</table>
</form>

<?php
include "koneksi.php";

$insert_pelanggan = false;
$insert_layanan = false;
$insert_transaksi = false;

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into tb_pelanggan set 
    nama_pelanggan = '$_POST[nama_pelanggan]',
    hp_pelanggan = '$_POST[hp_pelanggan]'");
    
    mysqli_query($koneksi, "insert into tb_layanan set
    jenis_layanan = '$_POST[jenis_layanan]',
    harga_layanan = '$_POST[harga_layanan]'");

    mysqli_query($koneksi, "insert into tb_transaksi set
    jumlah_pakaian = '$_POST[jumlah_pakaian]', 
    harga_total = '$_POST[harga_total]',
    diskon_harga = '$_POST[diskon_harga]',
    harga_bayar = '$_POST[harga_bayar]'");

    echo "<script>
            alert('Data berhasil tersimpan!')
         </script>";
} 
?>