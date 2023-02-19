<?php
$mahasiswa = [
    ["Galang", "065119164", "Ilmu Komputer", "galang@mail.com"],
    ["Hanafi", "065119134", "Ilmu Komputer", "hanafi@mail.com"]
];
// array multi dimensi atau array di dalam array
// key-nya merupakan index
// array ini masih bersifat numerik artinya indexnya masih angka


// menampilkan array secara spesifik
echo $mahasiswa[1][3];

echo "<br>";
echo $mahasiswa[0][0];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Jurusan</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs[0] ?></td>
                    <td><?= $mhs[1] ?></td>
                    <td><?= $mhs[2] ?></td>
                    <td><?= $mhs[3] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>



</body>

</html>