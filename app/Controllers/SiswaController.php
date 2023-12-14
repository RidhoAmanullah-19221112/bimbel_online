<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use Config\Services;

class SiswaController extends BaseController
{
    
    public function tampil_dashboard(){
        return view('Dashboard/Siswa', [
            'data_anggota' => (new SiswaModel())->findAll()
        ]);
    }

    private function cek_validasi(){
        $rules = [
            'email' => 'required|valid_email',
            'katasandi' => 'required|min_length[6]',
            'nama_lengkap' => 'required|min_length[5]',
        ];
        $msg = [
            'email' => [
                'required' => 'Email harus diisikan',
                'valid_email' => 'Email yang anda masukkan formatnya salah'
            ],
            'katasandi' => [
                'required' => 'Kata sandi tidak boleh kosong',
                'min_length' => 'Minimal katasandi 6 karakter'
            ]
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
          'katasandi' => request()->getPost('katasandi'),
          'nama_lengkap' => request()->getPost('nama_lengkap'),
          'jeniskelamin' => request()->getPost('jeniskelamin'),
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