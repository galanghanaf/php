<?php
// Pengkodisian / percabangan

// pengkodisian if else
$x = 120;
if ($x < 20) {
    echo "benar";
} else {
    echo "salah";
}


// pengkodisian if , else if , else
$a = 20;
if ($a < 20) {
    echo "benar";
} else if ($a == 20) {
    echo "mantap";
} else {
    echo "salah";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .warna_baris {
            background-color: blue;

        }
    </style>
</head>

<body>
    <!-- Pengulangan for dengan pengkodisian if else -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna_baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor ?>
                </tr>
            <?php endfor; ?>
    </table>


</body>

</html>