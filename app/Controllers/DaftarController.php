<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;

class DaftarController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new SiswaModel();
        $data = [
          'email' => request()->getPost('email'),
          'username' => request()->getPost('username'),
          'namasiswa' => request()->getPost('namasiswa'),
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
              return redirect()->to(base_url('Signup/tampildata'));
            }
        } else {
            echo "Tidak ada data untuk dimasukkan.";
        }
    }
}