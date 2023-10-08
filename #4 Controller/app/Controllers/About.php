<?php

class About {
    public function index($nama = 'Sholahuddin Alfatah', $pekerjaan = 'Engnineer')
    {
        echo "Halo!, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }

}