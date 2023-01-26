<?php
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
    <form action="" method="post">
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
            <input type="text" name="gambar" id="gambar" required>
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>

</html>