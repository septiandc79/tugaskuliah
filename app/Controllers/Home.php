<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Home',
            'subjudul' => 'Awal',
        ];
        return view('layout/layout', $data);
    }
}
