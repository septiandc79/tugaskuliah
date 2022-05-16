<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMahasiswa;
use App\Models\ModelMahasiswaPagination;
use Config\Services;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $modelMahasiswa = new ModelMahasiswa();

        $data = [
            'judul' => 'Home',
            'subjudul' => 'Data Mahasiswa',
            'tampildata' => $modelMahasiswa->tampildata()
        ];


        return view('mahasiswa/viewdata', $data);
    }
}
