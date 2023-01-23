<?php


$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    // ambil data dari tiap elemen dalam form
    $nama    = htmlspecialchars($data["nama"]);
    $npm     = htmlspecialchars($data["npm"]);
    $email   = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // Uploud gambar
    $gambar = uploud();
    if (!$gambar) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa VALUES
    ('','$nama', '$npm', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    //cek 
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;


    // ambil data dari tiap elemen dalam form
    $id          = $data['id'];
    $nama        = htmlspecialchars($data["nama"]);
    $npm         = htmlspecialchars($data["npm"]);
    $email       = htmlspecialchars($data["email"]);
    $jurusan     = htmlspecialchars($data["jurusan"]);
    $gambarLama  = htmlspecialchars($data["gambarLama"]);

    // cek apakah user menguploud gambar atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = uploud();
    }

    // query insert data
    $query = "UPDATE mahasiswa SET
                nama = '$nama', 
                npm = '$npm', 
                email = '$email', 
                jurusan = '$jurusan', 
                gambar = '$gambar'
                WHERE id = $id";
    mysqli_query($conn, $query);

    //cek 
    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa
              WHERE
              nama LIKE '%$keyword%' OR
              npm LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              jurusan LIKE '%$keyword%'";
    return query($query);
}

function uploud()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di uploud
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!'); 
            </script>";
        return false;
    }

    // cek apakah yang diuploud adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile); //memecah nama file dan tipe filenya
    $ekstensiGambar = strtolower(end($ekstensiGambar)); // memaksa mengubah nama tipe file huruf kecil

    // mengecek apakah gambar yang diuploud sesuai dengan format file diatas
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda uploud bukan gambar'); 
            </script>";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar'); 
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diuploud
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    // kenapa return, untuk menyimpan nama gambarnya di function tambah
    return $namaFileBaru;
}

function registrasi($data)
{
    global $conn;
    // agar user dipaksa menggunakan huruf kecil dan tidak boleh ada slash
    $username = strtolower(stripslashes($data["username"]));

    // mysql real escape string berfungsi untuk menangkap kutip pada password
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek apakah username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar, silahkan cari yang lain');
            </script>";
        return false;
    }
    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // berikut menggunakan enkripsi md5 (tidak disarankan)
    // $password = md5($password);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('','$username', '$password')");

    // cek apakah berhasil atau tidak
    return mysqli_affected_rows($conn);
}
