<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new KelasModel();
        $data = [
          'penerbit' => request()->getPost('penerbit'),
          'kota' => request()->getPost('kota'),
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
        }else{
             $r = $model->insert($data);
             $id = $r;
        }
        if($r != false){
          return redirect()->to(base_url('Penerbit'));
        }
     }

     public function tampilpengajar(){
        $m = new KelasModel();

        return view('PengajarView/kelaspengajar');
    }

    public function tampilsiswa(){
        $m = new KelasModel();

        return view('SiswaView/kelas-siswa');
    }
 
     public function form(){
         return view('/Penerbit/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new KelasModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('Penerbit'));
     }
 
     public function edit($id){
         $m = new KelasModel();
         $data = $m->where('id', $id)->first();
         return view('Penerbit/form', [
             'data' => $data
         ]);
        }
    }