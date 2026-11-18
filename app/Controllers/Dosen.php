<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function index()
    {
        $dosenModel = new DosenModel();

        $data = [
            'title' => 'Data Dosen',
            'dosen' => $dosenModel->findAll()
        ];

        return view('dosen/index', $data);
    }
}
