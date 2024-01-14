<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\PengajarModel;

class LoginController extends BaseController
{
    public function tampil()
    {
        return view('LoginView/form');
    }

    public function login()
    {
        $tingkat = request()->getPost('tingkat');
        if($tingkat == 'Pengajar'){
            $e = request()->getPost('email');
            $k = request()->getPost('katasandi');

            $m = new PengajarModel();
            $r = $m->where('email', $e)
                ->where('katasandi', $k)->first();

            if($r == null){
                return "Login gagal";
            }else{
                session()->set('Pengajar', $r);
                return redirect()->to(base_url('Dashboard/Pengajar'));
            }}
        elseif($tingkat == 'Siswa'){
            $e = request()->getPost('email');
            $k = request()->getPost('katasandi');
    
            $m = new SiswaModel();
            $r = $m->where('email', $e)
                ->where('katasandi', $k)->first();
    
            if($r == null){
                return "Login gagal";
            }else{
                session()->set('Siswa', $r);
                return redirect()->to(base_url('Dashboard/Siswa'));
            }}
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
          return redirect()->to(base_url('LoginView'));
        }
    } else {
        echo "Tidak ada data untuk dimasukkan.";
    }
}


    public function Signuppengajar()
    {
      return view('Signuppengajar/form');
    }

    public function suksess()
    {
      return view('Signuppengajar/tampildata');
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('LoginView'));
    }
}