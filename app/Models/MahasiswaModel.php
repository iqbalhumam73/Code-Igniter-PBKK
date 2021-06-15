<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nrp';
    protected $useTimestamps = true;

    public function getMahasiswa($mhs_nrp = false)
    {
        if ($mhs_nrp == false) {
            return $this->findAll();
        }
        return $this->where(['mhs_nrp' => $mhs_nrp])->first();
        // return $mahasiswa;
    }
}
