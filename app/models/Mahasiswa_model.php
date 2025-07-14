<?php

class Mahasiswa_model
{

    private $dbh;
    private $stmt;
    public function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=uasweb1_nazlaiftitah', 'root', '');
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Koneksi Gagal: ' . $e->getMessage());
        }
    }




    // private $mhs = [
    //     [
    //         "nama" => "Nazla Iftitah",
    //         "nim" => "22012004",
    //         "email" => "nazlaiftitah@gmail.com",
    //         "jurusan" => "Manajemen Informatika"
    //     ],
    //     [
    //         "nama" => "Dian Ramadhani",
    //         "nim" => "21304002",
    //         "email" => "dianramadhani@gmail.com",
    //         "jurusan" => "Teknik Komputer"
    //     ],
    //     [
    //         "nama" => "Rizky Maulana",
    //         "nim" => "21304002",
    //         "email" => "rizkymaulana@yahoo.com",
    //         "jurusan" => "Sistem Informasi"
    //     ],
    //     [
    //         "nama" => "Aulia Rahma",
    //         "nim" => "21304002",
    //         "email" => "auliarahma@mail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Fahri Nugraha",
    //         "nim" => "21304002",
    //         "email" => "fahri.n@gmail.com",
    //         "jurusan" => "Manajemen Informatika"
    //     ],
    //     [
    //         "nama" => "Lestari Dewi",
    //         "nim" => "21304002",
    //         "email" => "lestari.dewi@mail.com",
    //         "jurusan" => "Rekayasa Perangkat Lunak"
    //     ],
    //     [
    //         "nama" => "Aditya Pratama",
    //         "nim" => "21304002",
    //         "email" => "adityapratama@gmail.com",
    //         "jurusan" => "Teknik Komputer"
    //     ],
    //     [
    //         "nama" => "Siti Nurhaliza",
    //         "nim" => "21304003",
    //         "email" => "sitinurhaliza@mail.com",
    //         "jurusan" => "Sistem Informasi"
    //     ],
    //     [
    //         "nama" => "M. Rafi Akbar",
    //         "nim" => "21304003",
    //         "email" => "rafiakbar@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Dewi Kartika",
    //         "nim" => "21304003",
    //         "email" => "dewikartika@mail.com",
    //         "jurusan" => "Manajemen Informatika"
    //     ]
    // ];

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}