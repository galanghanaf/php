<?php

// Pengulangan for
for ($i = 0; $i < 5; $i++) {
    echo "Hello World <br>";
};


// Pengulangan while 
$a = 0;
while ($a < 5) {
    echo "Galang <br>";

    $a++;
};


// Pengulangan do while
$x = 0;
do {
    echo "Hanafi <br>";
    $x++;
} while ($x < 5);

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
    <!-- Pengulangan for menggunakan gaya templating-->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor; ?>
    </table>


</body>

</html>