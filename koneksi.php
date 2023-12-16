<?php

$koneksi = mysqli_connect("localhost", "tool", "12345678", "vast_laundry");

if(!$koneksi) {
    die(mysqli_error($koneksi));
}

?>