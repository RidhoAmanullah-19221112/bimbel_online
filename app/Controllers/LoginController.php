<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\PengajarModel;

class LoginController extends BaseController
{
    public function form()
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

    public function Signuppengajar()
    {
      return view('Signuppengajar/form');
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('LoginView'));
    }
}