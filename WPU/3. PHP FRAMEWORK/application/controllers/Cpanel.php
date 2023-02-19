<?php

class Cpanel extends Controller
{
    public function index()
    {
        $data['title'] = 'Control Panel';
        $this->view('cpanel/template/head', $data);
        $this->view('cpanel/index', $data);
        $this->view('cpanel/template/footer', $data);
    }

    public function dataKaryawan()
    {
        $data['title'] = 'Data Karyawan';
        $data['tbl_karyawan'] = $this->model('Karyawan_model')->getAllDataKaryawan();
        $this->view('cpanel/template/head', $data);
        $this->view('cpanel/datakaryawan', $data);
        $this->view('cpanel/template/footer', $data);
    }
    public function tambahKaryawan()
    {

        if ($this->model('Karyawan_model')->addDataKaryawan($_POST) > 0) {
            Flasher::setFlash('Data Karyawan', 'Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/cpanel/datakaryawan');
            exit;
        } else {
            Flasher::setFlash('Data Karyawan', 'Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/cpanel/datakaryawan');
            exit;
        }
    }

    public function hapusKaryawan($id)
    {

        if ($this->model('Karyawan_model')->deleteDataKaryawan($id) > 0) {
            Flasher::setFlash('Data Karyawan', 'Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/cpanel/datakaryawan');
            exit;
        } else {
            Flasher::setFlash('Data Karyawan', 'Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/cpanel/datakaryawan');
            exit;
        }
    }

    public function ubahKaryawan()
    {

        if ($this->model('Karyawan_model')->editDataKaryawan($_POST) > 0) {
            Flasher::setFlash('Data Karyawan', 'Berhasil', 'Diubah', 'success');
            header('Location: ' . BASEURL . '/cpanel/datakaryawan');
            exit;
        } else {
            Flasher::setFlash('Data Karyawan', 'Gagal', 'Diubah', 'danger');
            header('Location: ' . BASEURL . '/cpanel/datakaryawan');
            exit;
        }
    }

    public function dataKaryawanById($id)
    {
        $data['title'] = 'Ubah Data Karyawan';
        $data['tbl_karyawan'] = $this->model('Karyawan_model')->getKaryawanByid($id);
        $this->view('cpanel/template/head', $data);
        $this->view('cpanel/ubahkaryawan', $data);
        $this->view('cpanel/template/footer', $data);
    }

    public function dataUser()
    {
        $data['app'] = 'e-Truck Inspection';
        $data['title'] = 'Data User';
        $data['tbl_user'] = $this->model('User_model')->getAllUser();
        $this->view('cpanel/template/head', $data);
        $this->view('cpanel/datauser', $data);
        $this->view('cpanel/template/footer', $data);
    }

    public function tambahUser()
    {

        if ($this->model('User_model')->tambahDataUser($_POST) > 0) {
            Flasher::setFlash('Data User', 'Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/cpanel/datauser');
            exit;
        } else {
            Flasher::setFlash('Data User', 'Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/cpanel/datauser');
            exit;
        }
    }

    public function hapusUser($id)
    {

        if ($this->model('User_model')->hapusDataUser($id) > 0) {
            Flasher::setFlash('Data User', 'Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/cpanel/datauser');
            exit;
        } else {
            Flasher::setFlash('Data User', 'Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/cpanel/datauser');
            exit;
        }
    }

    public function getUbahUser()
    {
        echo json_encode($this->model('User_model')->getUserById($_POST['id']));
    }

    public function ubahUser()
    {

        if ($this->model('User_model')->ubahDataUser($_POST) > 0) {
            Flasher::setFlash('Data User', 'Berhasil', 'Diubah', 'success');
            header('Location: ' . BASEURL . '/cpanel/datauser');
            exit;
        } else {
            Flasher::setFlash('Data User', 'Gagal', 'Diubah', 'danger');
            header('Location: ' . BASEURL . '/cpanel/datauser');
            exit;
        }
    }
}
