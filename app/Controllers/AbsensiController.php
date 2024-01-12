<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AbsensiController extends BaseController
{
    public function absensipengajar()
    {
        $absensiModel = new \App\Models\AbsensiModel();
        $data['status'] = $absensiModel->findAll();
        return view('PengajarView/absen');
    }

    public function absensisiswa()
    {
        $absensiModel = new \App\Models\AbsensiModel();
        $data['status'] = $absensiModel->findAll();
        return view('SiswaView/absen-siswa');
    }

    public function tambah() {
        
    }

    public function ubah($id) {
        
    }

    public function hapus($id) {
    }
        
}