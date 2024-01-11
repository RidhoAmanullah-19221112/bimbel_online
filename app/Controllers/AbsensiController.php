<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AbsensiModel;

class AbsensiController extends BaseController
{
    public function tampil()
    {
        return view('AbsensiSiswa/index');
    }

    public function tambah() {
        
    }

    public function ubah($id) {
        
    }

    public function hapus($id) {
    }
        
}