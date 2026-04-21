<?php

class Mahasiswa_model{
    private $mhs = [
        [
            "nama"    => "Muhammad Zakki Fitra Ramadhan",
            "nim"     => "60163043247012",
            "email"   => "ramadhanzakki@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama"    => "Davino Marco",
            "nim"     => "760786245250727",
            "email"   => "davinomatco@gmail.com",
            "jurusan" => "Teknologi Pendidikan"
        ],
        [
            "nama"    => "Ilham Jordan",
            "nim"     => "7678679320624245",
            "email"   => "ilhamjordan@gmail.com",
            "jurusan" => "Teknologi Informasi"
        ]
    ];

    public function getAllMahasiswa(){
        return $this->mhs;
    }
}