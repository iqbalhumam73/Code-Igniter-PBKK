<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class MahasiswaController extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $data = [
            'mahasiswa' => $this->mahasiswaModel->getMahasiswa()
        ];

        return view('view_mahasiswa', $data);
    }
    public function detail($mhs_nrp)
    {
        $data = [
            'mahasiswa' => $this->mahasiswaModel->getMahasiswa($mhs_nrp)
        ];
        return view('view_detailmahasiswa', $data);
    }
}
