<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table            = 'tb_mahasiswa';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'nim', 'nama', 'tgl_lahir', 'jk', 'jurusan'
    ];

    public function tampilData()
    {
        return $this->table('tb_mahasiswa')->get();
    }
}
