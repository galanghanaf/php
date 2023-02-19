<?php
date_default_timezone_set('Asia/Jakarta');

class Visitor extends Controller
{
    public function index()
    {
        $data['title'] = 'Visitor';
        $this->view('visitor/template/header', $data);
        $this->view('visitor/index', $data);
        $this->view('visitor/template/footer', $data);
    }

    public function fgTruck()
    {
        $data['title'] = 'FG Truck';
        $this->view('visitor/template/header', $data);
        $this->view('visitor/fgtruck', $data);
        $this->view('visitor/template/footer', $data);
    }

    public function materialTruck()
    {
        $data['title'] = 'Material Truck';
        $this->view('visitor/template/header', $data);
        $this->view('visitor/materialtruck', $data);
        $this->view('visitor/template/footer', $data);
    }

    public function inputVisitor()
    {
        $data['title'] = 'Data Pengunjung';
        $data['tbl_karyawan'] = $this->model('Karyawan_model')->getAllDataKaryawan();
        $this->view('visitor/template/header', $data);
        $this->view('visitor/inputvisitor', $data);
        $this->view('visitor/template/footer', $data);
    }

    public function inputKelengkapan()
    {
        $data['title'] = 'Kelengkapan Utama';
        $this->view('visitor/template/header', $data);
        $this->view('visitor/inputkelengkapan', $data);
        $this->view('visitor/template/footer', $data);
    }

    public function getUbahKaryawan()
    {
        echo json_encode($this->model('Karyawan_model')->getKaryawanById($_POST['id']));
    }

    public function dataKaryawanById($id)
    {
        $data['title'] = 'Ubah Data Karyawan';
        $data['tbl_karyawan'] = $this->model('Karyawan_model')->getKaryawanByid($id);
        $this->view('visitor/template/header', $data);
        $this->view('visitor/inputvisitor', $data);
        $this->view('visitor/template/footer', $data);
    }
}
