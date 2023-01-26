<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// mengambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data(fetch) mahasiswa dari object result
// ada 4 cara mengambil data(fetch) Mahasiswa
// mysqli_fetch_row() = mengembalikan arrary numerik ($tabel"1")
// mysqli_fetch_assoc() = mengembalikan array asosiatif ($tabel"email")
// mysqli_fetch_array() = mengembalikan array numerik dan asosiatif (tidak efisien)
// mysqli_fetch_object() = mengembalikan data dengan cara ($tabel->email)

// $mhs = mysqli_fetch_assoc($result); 
// dikarenakan fungsi ini hanya dapat mengambil data teratas
// maka diperlukan pengulangan while

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"] ?>" width="50px" alt=""></td>
                <td><?= $row["npm"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        </tbody>

    </table>
</body>

</html>