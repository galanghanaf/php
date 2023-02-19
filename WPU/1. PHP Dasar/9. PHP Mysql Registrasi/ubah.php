<?php
require 'functions.php';

// mengambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
        </script
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
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
    <title>Ubah Data</title>
</head>

<body>
    <h1>Ubah Data</h1>
    <!-- supaya form dapat mengelola file, diperlukan enctype
    sehingga formnya mempunyai 2 jalur
    yang dimana string akan dikelola oleh $_POST 
    sedangkan untuk file akan dikelola oleh $_FILES -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mahasiswa["id"] ?>">
        <!-- semisal user tidak mengubah gambar, maka gambar lama akan dipertahankan -->
        <input type="hidden" name="gambarLama" value="<?= $mahasiswa["gambar"]; ?>">
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required value="<?= $mahasiswa["nama"] ?>">
        </div>
        <div>
            <label for="npm">NPM</label>
            <input type="text" name="npm" id="npm" required value="<?= $mahasiswa["npm"] ?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required value="<?= $mahasiswa["email"] ?>">
        </div>
        <div>
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" required value="<?= $mahasiswa["jurusan"] ?>">
        </div>
        <div>
            <label for="gambar">Gambar</label>
            <br>
            <img src="img/<?= $mahasiswa["gambar"] ?>" alt="">
            <br>
            <input type="file" name="gambar" id="gambar">
        </div>
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>

</html>