<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use app\Models\DaftarsiswaModel;

class DaftarsiswaController extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil(){

        return view('DaftarsiswaView/tampildata');
    }

    public function tampilpengajar(){

        return view('PengajarView/daftarpengajar');
    }
}
