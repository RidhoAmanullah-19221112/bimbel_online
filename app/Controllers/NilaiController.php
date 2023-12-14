<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NilaiModel;

class NilaiController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new NilaiModel();
        $data = [
          'tb_buku_id' => request()->getPost('tb_buku_id'),
          'nomor_koleksi' => request()->getPost('nomor_koleksi'),
          'status_koleksi' => request()->getPost('status_koleksi'),
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('Koleksibuku'));
        }
     }
 
     public function show(){
         $m = new NilaiModel();
 
         return view('Koleksibuku/tampildata', [
             'data_koleksibuku' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('Koleksibuku/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new NilaiModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('Koleksibuku'));
     }
 
     public function edit($id){
         $m = new NilaiModel();
         $data = $m->where('id', $id)->first();
         return view('Koleksibuku/form', [
             'data' => $data
         ]);
        }
    }
