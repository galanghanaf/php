<?php

class User_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {

        $this->db->query('SELECT * FROM tbl_user ORDER BY id DESC');
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

    public function uploadFotoUser()
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
        if ($ukuranFile > 1000000) {
            return false;
        }

        $namaFileBaru = time() . uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFoto;

        $propertiFoto = getimagesize($tmpName);

        $pathToThumbs = "./img/user/";
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
    public function tambahDataUser($data)
    {
        $foto = $this->uploadFotoUser();
        if (!$foto) {
            return 0;
        }

        $query = "INSERT INTO tbl_user VALUES ('', :username, :nik, :nama_lengkap, :email, :pass, :sys_admin, :jabatan, :region_id, :plant_id, :line_id, :locked, :aktif, :foto)";
        $this->db->query($query);
        $this->db->bind('username', htmlspecialchars($data['username']));
        $this->db->bind('nik', htmlspecialchars($data['nik']));
        $this->db->bind('nama_lengkap', htmlspecialchars($data['nama_lengkap']));
        $this->db->bind('email', htmlspecialchars($data['email']));
        $this->db->bind('pass', password_hash($data['pass'], PASSWORD_DEFAULT));
        $this->db->bind('sys_admin', htmlspecialchars($data['sys_admin']));
        $this->db->bind('jabatan', htmlspecialchars($data['jabatan']));
        $this->db->bind('region_id', htmlspecialchars($data['region_id']));
        $this->db->bind('plant_id', htmlspecialchars($data['plant_id']));
        $this->db->bind('line_id', htmlspecialchars($data['line_id']));
        $this->db->bind('locked', htmlspecialchars($data['locked']));
        $this->db->bind('aktif', htmlspecialchars($data['aktif']));
        $this->db->bind('foto', $foto);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM tbl_user WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function hapusDataUser($id)
    {

        $query = "DELETE FROM tbl_user WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataUser($data)
    {

        $foto = $this->uploadFotoUser();

        if ($foto == '' | 0 | NULL) {
            $query = "UPDATE tbl_user SET
                    username = :username,
                    nik = :nik,
                    nama_lengkap = :nama_lengkap,
                    email = :email,
                    pass = :pass,
                    sys_admin = :sys_admin,
                    jabatan = :jabatan,
                    region_id = :region_id,
                    plant_id = :plant_id,
                    line_id = :line_id,
                    locked = :locked,
                    aktif = :aktif,
                    foto = :fotoLama
                  WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('username', htmlspecialchars($data['username']));
            $this->db->bind('nik', htmlspecialchars($data['nik']));
            $this->db->bind('nama_lengkap', htmlspecialchars($data['nama_lengkap']));
            $this->db->bind('email', htmlspecialchars($data['email']));
            $this->db->bind('pass', password_hash($data['pass'], PASSWORD_DEFAULT));
            $this->db->bind('sys_admin', htmlspecialchars($data['sys_admin']));
            $this->db->bind('jabatan', htmlspecialchars($data['jabatan']));
            $this->db->bind('region_id', htmlspecialchars($data['region_id']));
            $this->db->bind('plant_id', htmlspecialchars($data['plant_id']));
            $this->db->bind('line_id', htmlspecialchars($data['line_id']));
            $this->db->bind('locked', htmlspecialchars($data['locked']));
            $this->db->bind('aktif', htmlspecialchars($data['aktif']));
            $this->db->bind('fotoLama', htmlspecialchars($data['fotoLama']));
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        } else {
            $query = "UPDATE tbl_user SET
                    username = :username,
                    nik = :nik,
                    nama_lengkap = :nama_lengkap,
                    email = :email,
                    pass = :pass,
                    sys_admin = :sys_admin,
                    jabatan = :jabatan,
                    region_id = :region_id,
                    plant_id = :plant_id,
                    line_id = :line_id,
                    locked = :locked,
                    aktif = :aktif,
                    foto = :foto
                  WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('username', htmlspecialchars($data['username']));
            $this->db->bind('nik', htmlspecialchars($data['nik']));
            $this->db->bind('nama_lengkap', htmlspecialchars($data['nama_lengkap']));
            $this->db->bind('email', htmlspecialchars($data['email']));
            $this->db->bind('pass', password_hash($data['pass'], PASSWORD_DEFAULT));
            $this->db->bind('sys_admin', htmlspecialchars($data['sys_admin']));
            $this->db->bind('jabatan', htmlspecialchars($data['jabatan']));
            $this->db->bind('region_id', htmlspecialchars($data['region_id']));
            $this->db->bind('plant_id', htmlspecialchars($data['plant_id']));
            $this->db->bind('line_id', htmlspecialchars($data['line_id']));
            $this->db->bind('locked', htmlspecialchars($data['locked']));
            $this->db->bind('aktif', htmlspecialchars($data['aktif']));
            $this->db->bind('foto', htmlspecialchars($foto));
            $this->db->bind('id', $data['id']);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }
}
