<?php
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
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><a href="17-GET-VariableSuperglobals.php?nama=<?= $mhs["nama"]; ?> 
            &npm=<?= $mhs["npm"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>
            &email=<?= $mhs["email"]; ?>
            &foto=<?= $mhs["foto"]; ?>"><?= $mhs["nama"]; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>