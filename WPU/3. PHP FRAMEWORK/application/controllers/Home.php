<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->view('home/template/header', $data);
        $this->view('home/index', $data);
        $this->view('home/template/footer', $data);
    }
}
