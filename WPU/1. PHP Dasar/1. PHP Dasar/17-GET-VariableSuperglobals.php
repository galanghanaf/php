<?php

// untuk memastikan apakah tidak ada data di $_GET
// berguna untuk terhindar dari orang lain
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["npm"]) ||
    !isset($_GET["jurusan"])
) {
    //redirect (mengembalikan paksa)
    header("Location: 16-GET-VariableSuperglobals.php");
    exit; //supaya script dibawah tidak bisa dieksekusi
};
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
            <tr>
                <td><?= $_GET["nama"] ?></td>
                <td><?= $_GET["npm"] ?></td>
                <td><?= $_GET["jurusan"] ?></td>
                <td><?= $_GET["email"] ?></td>
                <td><img src="img/<?= $_GET["foto"] ?>"></td>
            </tr>
        </tbody>
    </table>

    <a href="16-GET-VariableSuperglobals.php">Kembali</a>
</body>

</html>