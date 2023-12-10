<?php
include 'koneksi.php';
function register($data, $conn) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirm = mysqli_real_escape_string($conn, $data["confirm"]);

    $result = mysqli_query($conn, "SELECT username FROM tb_register WHERE username = '$username'");
    
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar!')
              </script>";
        return false;
    }

    if($password !== $confirm) {
        echo "<script>
                alert ('Konfirmasi password tidak sesuai!')
              </script>";
    
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    

    mysqli_query($conn, "INSERT INTO tb_register VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
?>