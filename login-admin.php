<?php
require 'functions.php';

$conn = mysqli_connect("localhost", "tool", "12345678", "db_vast_laundry");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT username, password FROM tb_register WHERE username = '$username'");

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $row["password"])) {
            header("Location: tambah-pelanggan.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        <h1>Login</h1>

        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username atau password salah!</p>
        <?php endif; ?>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="login">Login</button>
                </li>
            </ul>
        </form>
    </body>
</html>