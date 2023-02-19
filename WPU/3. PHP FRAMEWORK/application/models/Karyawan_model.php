<?php

class Karyawan_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDataKaryawan()
    {

        $this->db->query('SELECT * FROM tbl_karyawan ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function fotoResize($source, $width, $height)
    {
        $new_width = 300;
        $new_height = 300;
        $thumbImg = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($thumbImg, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        return $thumbImg;
    }

    public function uploadFotoKaryawan()
    {
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];

        $tmpName = $_FILES['foto']['tmp_name'];

        $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
        $ekstensiFoto = explode('.', $namaFile);
        $ekstensiFoto = strtolower(end($ekstensiFoto));
        if (!in_array($ekstensiFoto, $ekstensiFotoValid)) {
            return false;
        }
        if ($ukuranFile > 10000000) {
            return false;
        }

        $namaFileBaru = time() . uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFoto;

        $propertiFoto = getimagesize($tmpName);

        $pathToThumbs = "./img/karyawan/";
        $img_type = $propertiFoto[2];

        if ($img_type == IMAGETYPE_JPEG) {
            $source = imagecreatefromjpeg($tmpName);
            $resizeImg = $this->fotoResize($source, $propertiFoto[0], $propertiFoto[1]);
            imagejpeg($resizeImg, $pathToThumbs . $namaFileBaru);
        } elseif ($img_type == IMAGETYPE_PNG) {
            $source = imagecreatefrompng($tmpName);

            $resizeImg = $this->fotoResize($source, $propertiFoto[0], $propertiFoto[1]);
            imagepng($resizeImg, $pathToThumbs . $namaFileBaru);
        } elseif ($img_type == IMAGETYPE_GIF) {
            $source = imagecreatefromgif($tmpName);
            $resizeImg = $this->fotoResize($source, $propertiFoto[0], $propertiFoto[1]);
            imagegif($resizeImg, $pathToThumbs . $namaFileBaru);
        }

        return $namaFileBaru;
    }
    public function addDataKaryawan($data)
    {
        $foto = $this->uploadFotoKaryawan();
        if (!$foto) {
            return 0;
        }

        $query = "INSERT INTO tbl_karyawan VALUES ('', :plant_id, :nik, :nama_karyawan, :jenis_kelamin, :no_tlp, :department, :line, :posisi, :username, :email, :pass, :sys_admin, :locked, :aktif, :created_at, :updated_at, :foto)";
        $this->db->query($query);
        $this->db->bind('plant_id', htmlspecialchars($data['plant_id']));
        $this->db->bind('nik', htmlspecialchars($data['nik']));
        $this->db->bind('nama_karyawan', htmlspecialchars($data['nama_karyawan']));
        $this->db->bind('jenis_kelamin', htmlspecialchars($data['jenis_kelamin']));
        $this->db->bind('no_tlp', htmlspecialchars($data['no_tlp']));
        $this->db->bind('department', htmlspecialchars($data['department']));
        $this->db->bind('line', htmlspecialchars($data['line']));
        $this->db->bind('posisi', htmlspecialchars($data['posisi']));
        $this->db->bind('username', htmlspecialchars($data['username']));
        $this->db->bind('email', htmlspecialchars($data['email']));
        $this->db->bind('pass', md5($data['pass']));
        $this->db->bind('sys_admin', htmlspecialchars($data['sys_admin']));
        $this->db->bind('locked', htmlspecialchars($data['locked']));
        $this->db->bind('aktif', htmlspecialchars($data['aktif']));
        $this->db->bind('created_at', time());
        $this->db->bind('updated_at', time());
        $this->db->bind('foto', $foto);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getKaryawanById($id)
    {
        $this->db->query('SELECT * FROM tbl_karyawan WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function deleteDataKaryawan($id)
    {

        $query = "DELETE FROM tbl_karyawan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataKaryawan($data)
    {

        $foto = $this->uploadFotoKaryawan();

        if ($foto == '' | 0 | NULL) {
            $query = "UPDATE tbl_karyawan SET
                    plant_id = :plant_id,
                    nik = :nik,
                    nama_karyawan = :nama_karyawan,
                    jenis_kelamin = :jenis_kelamin,
                    no_tlp = :no_tlp,
                    department = :department,
                    line = :line,
                    posisi = :posisi,
                    username = :username,
                    email = :email,
                    pass = :pass,
                    sys_admin = :sys_admin,
                    locked = :locked,
                    aktif = :aktif,
                    created_at = :created_at,
                    updated_at = :updated_at,
                    foto = :fotoLama
                  WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('plant_id', htmlspecialchars($data['plant_id']));
            $this->db->bind('nik', htmlspecialchars($data['nik']));
            $this->db->bind('nama_karyawan', htmlspecialchars($data['nama_karyawan']));
            $this->db->bind('jenis_kelamin', htmlspecialchars($data['jenis_kelamin']));
            $this->db->bind('no_tlp', htmlspecialchars($data['no_tlp']));
            $this->db->bind('department', htmlspecialchars($data['department']));
            $this->db->bind('line', htmlspecialchars($data['line']));
            $this->db->bind('posisi', htmlspecialchars($data['posisi']));
            $this->db->bind('username', htmlspecialchars($data['username']));
            $this->db->bind('email', htmlspecialchars($data['email']));
            $this->db->bind('pass', md5($data['pass']));
            $this->db->bind('sys_admin', htmlspecialchars($data['sys_admin']));
            $this->db->bind('locked', htmlspecialchars($data['locked']));
            $this->db->bind('aktif', htmlspecialchars($data['aktif']));
            $this->db->bind('created_at', time());
            $this->db->bind('updated_at', time());
            $this->db->bind('fotoLama', htmlspecialchars($data['fotoLama']));
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        } else {
            $query = "UPDATE tbl_karyawan SET
                    plant_id = :plant_id,
                    nik = :nik,
                    nama_karyawan = :nama_karyawan,
                    jenis_kelamin = :jenis_kelamin,
                    no_tlp = :no_tlp,
                    department = :department,
                    line = :line,
                    posisi = :posisi,
                    username = :username,
                    email = :email,
                    pass = :pass,
                    sys_admin = :sys_admin,
                    locked = :locked,
                    aktif = :aktif,
                    created_at = :created_at,
                    updated_at = :updated_at,
                    foto = :foto
                  WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('plant_id', htmlspecialchars($data['plant_id']));
            $this->db->bind('nik', htmlspecialchars($data['nik']));
            $this->db->bind('nama_karyawan', htmlspecialchars($data['nama_karyawan']));
            $this->db->bind('jenis_kelamin', htmlspecialchars($data['jenis_kelamin']));
            $this->db->bind('no_tlp', htmlspecialchars($data['no_tlp']));
            $this->db->bind('department', htmlspecialchars($data['department']));
            $this->db->bind('line', htmlspecialchars($data['line']));
            $this->db->bind('posisi', htmlspecialchars($data['posisi']));
            $this->db->bind('username', htmlspecialchars($data['username']));
            $this->db->bind('email', htmlspecialchars($data['email']));
            $this->db->bind('pass', md5($data['pass']));
            $this->db->bind('sys_admin', htmlspecialchars($data['sys_admin']));
            $this->db->bind('locked', htmlspecialchars($data['locked']));
            $this->db->bind('aktif', htmlspecialchars($data['aktif']));
            $this->db->bind('created_at', htmlspecialchars($data['created_at']));
            $this->db->bind('updated_at', time());
            $this->db->bind('foto', htmlspecialchars($foto));
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }
}
