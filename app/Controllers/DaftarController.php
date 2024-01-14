<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengajarModel;

class DaftarController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new PengajarModel();
        $data = [
          'email' => request()->getPost('email'),
          'username' => request()->getPost('username'),
          'namapengajar' => request()->getPost('namapengajar'),
          'jenis_kelamin' => request()->getPost('jenis_kelamin'),
          'katasandi' => request()->getPost('katasandi'),
        ];
    
        // Cek jika semua data kosong
        if(array_filter($data)) {
            $id = (int) request()->getPost('id');
            if($id > 0){
                $r = $model->set($id, $data)->update();
            }else{
                $r = $model->set($data)->insert();
            }
            if($r != false){
              return redirect()->to(base_url('Signuppengajar/tampildata'));
            }
        } else {
            echo "Tidak ada data untuk dimasukkan.";
        }
    }
}