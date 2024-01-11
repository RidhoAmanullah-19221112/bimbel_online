<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengajarModel;

class PengajarController extends BaseController
{
    public function tampil_dashboard(){
        return view('Dashboard/Pengajar');
    }

    public function create()
    {
        $model = new PengajarModel();
        $data = [
          'email' => request()->getPost('email'),
          'username' => request()->getPost('username'),
          'namapengajar' => request()->getPost('namapengajar'),
          'jenis_kelamin' => request()->getPost('jenis_kelamin'),
          'password' => request()->getPost('password'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('PengajarView'));
        }
     }
 
     public function show(){
         $m = new PengajarModel();
 
         return view('PengajarView/tampildata', [
             'data_pengguna' => $m->findAll()
         ]);
     }

     public function absensi()
    {
        $absensiModel = new \App\Models\AbsensiModel();
        $data['status'] = $absensiModel->findAll();
        return view('AbsensiSiswa/index.php', $data);
    }
 
     public function form(){
         return view('PengajarView/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new PengajarModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('PengajarView'));
     }
 
     public function edit($id){
         $m = new PengajarModel();
         $data = $m->where('id', $id)->first();
         return view('PengajarView/form', [
             'data' => $data
         ]);
     }
}
?>
