<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Kalau action pada form kosong maka datanya akan dikirim pada halaman ini
         sedangkan apabila diisi maka datanya akan dikirim ke file lain -->

    <?php if (isset($_POST["submit"])) : ?>
        <h1>Halo Selamat Datang, <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <!-- <form action="19-POST-VariableSuperglobals.php" method="post"> -->
    <form action="" method="post">
        Masukan Nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>