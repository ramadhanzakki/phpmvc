<?php

class About{
    public function index($name = 'Zakki', $job = 'Mahasiswa'){
        echo "Halo, saya $name, pekerjaan ku adalah $job";
    }
    public function page(){
        echo 'Ini adalah page About/page';
    }
}