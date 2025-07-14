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


    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}