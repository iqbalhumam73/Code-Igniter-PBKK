<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\HTTP\Request;

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
        if (empty($data['mahasiswa'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }
        return view('view_detailmahasiswa', $data);
    }

    public function tambah()
    {

        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];

        return view('view_tambahmahasiswa', $data);
    }

    public function simpan()
    {
        // validasi input
        if (!$this->validate([
            'mhs_nama' => 'required',
            'mhs_urutan' => 'required',
            'mhs_asalsekolah' => 'required',
            'mhs_alamat' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            // session()->setFlashdata('warning', 'Tidak berhasil memassukan data mahasiswa baru.');
            return redirect()->to('/mahasiswa/tambah')->withInput()->with('validation', $validation);
        }
        // $inputdata = $this->request->getVar();
        $this->mahasiswaModel->save([
            'mhs_nama' => $this->request->getVar('mhs_nama'),
            'mhs_urutan' => $this->request->getVar('mhs_urutan'),
            'mhs_asalsekolah' => $this->request->getVar('mhs_asalsekolah'),
            'mhs_alamat' => $this->request->getVar('mhs_alamat')
        ]);
        session()->setFlashdata('pesan', 'Mahasiswa berhasil ditambahkan.');
        return redirect()->to('/mahasiswa');
    }
}
