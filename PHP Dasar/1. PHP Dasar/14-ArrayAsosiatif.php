<?php
// array asosiatif sama seperti multi dimensi
// yaitu array di dalam array 
// kecuali key-nya adalah string yang merupakan index
// indexnya bisa dibuat sendiri

$mahasiswa = [
    [
        "nama" => "Galang",
        "npm" => "065119164",
        "jurusan" => "Ilmu Komputer",
        "email" => "galang@mail.com",
        "foto" => "mark.jpg"
    ],
    [
        "nama" => "Hanafi",
        "npm" => "065119134",
        "jurusan" => "Ilmu Komputer",
        "email" => "hanafi@mail.com",
        "foto" => "yelena.jpg"

    ]
];

//cara menampilkan secara spesifik menggunakan echo
// echo $mahasiswa[1]["Nama"];


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
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Foto</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs["nama"] ?></td>
                    <td><?= $mhs["npm"] ?></td>
                    <td><?= $mhs["jurusan"] ?></td>
                    <td><?= $mhs["email"] ?></td>
                    <td><img src="img/<?= $mhs["foto"] ?>"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>