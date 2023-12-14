<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaketModel;


class PaketController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new PaketModel();
        $data = [
          'kategori' => request()->getPost('kategori'),
          'kode_ddc' => request()->getPost('kode_ddc'),
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('Kategori'));
        }
     }
 
     public function show(){
         $m = new PaketModel();
 
         return view('/Kategori/tampildatakategori', [
             'data_kategori' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('/Kategori/formkategori');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new PaketModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('Kategori'));
     }
 
     public function edit($id){
         $m = new PaketModel();
         $data = $m->where('id', $id)->first();
         return view('/Kategori/formkategori', [
             'data' => $data
         ]);
        }
    }