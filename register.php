<?php
require 'functions.php';

$conn = mysqli_connect("localhost", "tool", "12345678", "db_vast_laundry");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["register"])) {
    if(register($_POST, $conn) > 0) {
        echo "<script>
                alert('Akun admin berhasil ditambahkan!')
              </script>";
    } else { 
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registrasi</title>
        <style>
            label {
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Registrasi</h1>
        <form action="" method="post"> 
            <ul>
                <li>
                    <label for="username">username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <label for="confirm">confirm password :</label>
                    <input type="password" name="confirm" id="confirm">
                </li>
                <li>
                    <button type="submit" name="register">Register</button>
                </li>
            </ul>
        </form> 
    </body>
</html>
