<?php

namespace App\Models;

use CodeIgniter\Model;

class MataKuliahModel extends Model
{
    protected $table = 'mata_kuliah';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    public function getMataKuliah()
    {
        return $this->select('mata_kuliah.*, dosen.nama_dosen')
                    ->join('dosen', 'dosen.id = mata_kuliah.id_dosen')
                    ->findAll();
    }
}
