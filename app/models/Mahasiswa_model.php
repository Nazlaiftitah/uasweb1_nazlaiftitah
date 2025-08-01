<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }



    public function getAllMahasiswa()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO " . $this->table . " (nama, nim, email, jurusan) VALUES (:nama, :nim, :email, :jurusan)";
        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':nim', $data['nim']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':jurusan', $data['jurusan']);

        return $this->db->execute() ? $this->db->rowCount() : 0;
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);

        return $this->db->execute() ? $this->db->rowCount() : 0;
    }

    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE " . $this->table . " SET nama = :nama, nim = :nim, email = :email, jurusan = :jurusan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':nim', $data['nim']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':jurusan', $data['jurusan']);

        return $this->db->execute() ? $this->db->rowCount() : 0;
    }

    public function cariDataMahasiswa($keyword)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind(':keyword', '%' . $keyword . '%');
        return $this->db->resultSet();
    }
}