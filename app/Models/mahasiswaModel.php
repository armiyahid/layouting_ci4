<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    // Konfigurasi tabel
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nim',
        'nama',
        'prodi'
    ];

    protected $returnType = 'array';
    protected $useTimestamps = false;

    // Mengambil seluruh data mahasiswa
    public function getAll()
    {
        return $this->findAll();
    }

    // Mengambil mahasiswa berdasarkan ID
    public function getById($id)
    {
        return $this->find($id);
    }

    // Mengambil seluruh data menggunakan Query Builder
    public function getDataMahasiswa()
    {
        return $this->db
            ->table('mahasiswa')
            ->get()
            ->getResultArray();
    }

    // Mengambil mahasiswa berdasarkan program studi
    public function getByProdi($prodi)
    {
        return $this->db
            ->table('mahasiswa')
            ->where('prodi', $prodi)
            ->get()
            ->getResultArray();
    }

    // Mengurutkan mahasiswa berdasarkan nama (A-Z)
    public function getDataUrut()
    {
        return $this->db
            ->table('mahasiswa')
            ->orderBy('nama', 'ASC')
            ->get()
            ->getResultArray();
    }
}
