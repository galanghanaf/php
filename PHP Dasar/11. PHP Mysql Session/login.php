<?php

session_start();


// jika sudah login, lempar ke index.php
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}



require 'functions.php';
// apakah tombol login sudah ditekan atau belum
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek apakah username yang diinput ada atau tidak
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username menggunakan mysqli_num_rows secara satu persatu
    // apabila ada, maka akan bernilai 1
    if (mysqli_num_rows($result) === 1) {

        // mengecek password dari yang inputkan di $password,
        // disamakan dengan password di database menggunakan $row
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            // set session
            $_SESSION["login"] = true;

            // apabila sama/berhasil dialihkan ke index.php
            header("Location: index.php");
            // kemudian dihentikan dengan exit, agar tidak mengeksekusi script setelah header
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
    label {
        display: block;
    }
    </style>
</head>

<body>
    <h1>Halaman Login</h1>
    <?php if (isset($error)) : ?>
    <p style="color: red; font-style: italic;">Username / Password Salah!</p>
    <?php endif; ?>
    <form action="" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" name="login">Kirim</button>
    </form>

</body>

</html>