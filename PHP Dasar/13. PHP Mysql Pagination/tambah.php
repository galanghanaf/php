<?php

session_start();

// jika tidak ada session login, lempar ke login.php
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
        </script
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'index.php';
        </script
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <!-- supaya form dapat mengelola file, diperlukan enctype
    sehingga formnya mempunyai 2 jalur
    yang dimana string akan dikelola oleh $_POST 
    sedangkan untuk file akan dikelola oleh $_FILES -->
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="npm">NPM</label>
            <input type="text" name="npm" id="npm" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div>
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" required>
        </div>
        <div>
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar">
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>

</html>