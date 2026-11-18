<?php

namespace App\Controllers;

use App\Models\MataKuliahModel;

class MataKuliah extends BaseController
{
    public function index()
    {
        $mataKuliahModel = new MataKuliahModel();

        $data = [
            'title' => 'Data Mata Kuliah',
            'mata_kuliah' => $mataKuliahModel->getMataKuliah()
        ];

        return view('mata_kuliah/index', $data);
    }
}
