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
          'katasandi' => request()->getPost('katasandi'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('/'));
        }
     }


     public function absensi()
    {
        $absensiModel = new \App\Models\AbsensiModel();
        $data['status'] = $absensiModel->findAll();
        return view('AbsensiSiswa/index', $data);
    }

    public function materi()
    {
        $absensiModel = new \App\Models\MateriModel();
        $data['status'] = $absensiModel->findAll();
        return view('MateriView/tampildata', $data);
    }

    public function kelas()
    {
        return view('KelasView/tampildata');
    }

    public function jadwal()
    {
        return view('JadwalView/tampildata');
    }

    public function daftar_siswa()
    {
        return view('JadwalView/tampildata');
    }

    public function nilai_siswa()
    {
        return view('NilaiView/tampildata');
    }
 
     public function form(){
         return view('PengajarView/form');
     }

     public function sukses(){
        return view('Signuppengajar/tampildata');
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

     public function logout()
    {
        return view('LoginView/form');
    }
}
?>
