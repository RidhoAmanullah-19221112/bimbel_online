<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use App\Models\PengajarModel;

class LoginController extends BaseController
{
    public function form()
    {
        return view('login/form');
    }

    public function login()
    {
        $tingkat = request()->getPost('tingkat');
        if($tingkat == 'GURU'){
            $e = request()->getPost('email');
            $k = request()->getPost('katasandi');

            $m = new PengajarModel();
            $r = $m->where('email', $e)
                ->where('katasandi', $k)->first();

            if($r == null){
                return "Login gagal";
            }else{
                session()->set('Pengajar', $r);
                return redirect()->to(base_url('/Dashboard/Pengajar'));
            }}
        elseif($tingkat == 'SISWA'){
            $e = request()->getPost('email');
            $k = request()->getPost('katasandi');

            $m = new SiswaModel();
            $r = $m->where('email', $e)
                ->where('katasandi', $k)->first();

            if($r == null){
                return "Login gagal";
            }else{
                session()->set('Siswa', $r);
                return redirect()->to(base_url('/Dashboard/Siswa'));  
            }
        }else{
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

    public function daftar()
    {
        return view('login/daftar'); // Gantilah 'login/daftar' dengan nama tampilan pendaftaran yang sesuai
    }

    public function proses_daftar()
    {
        // Implementasi logika pendaftaran pengguna di sini
        // Ini bisa mencakup validasi data, penyimpanan pengguna baru ke dalam database, dll.
        // Setelah pendaftaran sukses, Anda bisa mengarahkan pengguna ke halaman yang sesuai.

        // Contoh validasi sederhana (gantilah ini dengan validasi yang sesuai):
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ];

        if (!$this->validate($rules)) {
            return redirect()->to(base_url('login/daftar'))->withInput()->with('validation', $this->validator);
        }

        // Jika validasi sukses, simpan pengguna ke database dan setelah itu arahkan pengguna ke halaman yang sesuai.
    }

    public function lupa_password()
    {
        // Logic untuk pemulihan kata sandi (optional)
    }
}
