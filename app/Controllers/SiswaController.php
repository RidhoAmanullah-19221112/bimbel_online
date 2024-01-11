<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use Config\Services;

class SiswaController extends BaseController
{
    
    public function tampil_dashboard(){
        return view('Dashboard/Siswa');
    }

    private function cek_validasi(){
        $rules = [
            'email' => 'required|valid_email',
            'katasandi' => 'required|min_length[6]',
            'namapeserta' => 'required|min_length[5]',
            'jenis_kelamin' => 'required|in_list[L,P]',
            'username' => 'required|min_length[5]',
        ];
        $msg = [
            'email' => [
                'required' => 'Email harus diisikan',
                'valid_email' => 'Email yang anda masukkan formatnya salah'
            ],
            'katasandi' => [
                'required' => 'Kata sandi tidak boleh kosong',
                'min_length' => 'Minimal katasandi 6 karakter'
            ],
            'namapeserta' => [
                'required' => 'Nama peserta tidak boleh kosong',
                'min_length' => 'Minimal nama peserta 5 karakter'
            ],
            'jenis_kelamin' => [
                'required' => 'Jenis kelamin tidak boleh kosong',
                'in_list' => 'Jenis kelamin harus berupa "L" atau "P"'
            ],
            'username' => [
                'required' => 'Username tidak boleh kosong',
                'min_length' => 'Minimal username 5 karakter'
            ],
        ];
        return Services::validation()
                    ->setRules($rules, $msg)
                    ->withRequest(request())
                    ->run();
    }

    public function create()
    {
        
        $model = new SiswaModel();
        $data = [
          'email' => request()->getPost('email'),
          'password' => request()->getPost('password'),
          'namapeserta' => request()->getPost('namapeserta'),
          'jenis_kelamin' => request()->getPost('jenis_kelamin'),
          'username' => request()->getPost('username'),
          'alamat' => request()->getPost('alamat'),
        ];
 
        $id = (int) request()->getPost('id');

        if($this->cek_validasi() == false){
            session()->setFlashdata("xyz", Services::validation());

            if($id > 0){
                return redirect()->to(base_url('Siswa/edit/'.$id));
            }else{
                return redirect()->to(base_url('SiswaView/form')) 
                                  ->with('data', $data);
            }
        }

        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('SiswaView'));
        }
     }

    public function absensi()
    {
        $absensiModel = new \App\Models\AbsensiModel();
        $data['absensi'] = $absensiModel->findAll();
        return view('absensi/index', $data);
    }
 
     public function show(){
         $m = new SiswaModel();
 
         return view('SiswaView/tampildata', [
             'data_anggota' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('SiswaView/formdata',[
            'validation' => session('xyz'),
            'data' => session('data')
         ]);
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new SiswaModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('SiswaView'));
     }
 
     public function edit($id){
         $m = new SiswaModel();
         $data = $m->where('id', $id)->first();
         return view('SiswaView/formdata', [
             'data' => $data
         ]);
        }
}
