<?php

class About extends Controller {
    public function index($nama = 'Sholahuddin Alfatah', $pekerjaan = 'Engnineer', $umur = '145')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'pages';
        $this->view('templates/header', $data);
        $this->view('templates/footer');
        $this->view('about/page');
        
    }

}