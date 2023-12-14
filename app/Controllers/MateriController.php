<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MateriModel;

class MateriController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new MateriModel();
        $data = [
          'judul' => request()->getPost('judul'),
          'edisi' => request()->getPost('edisi'),
          'cetakkan' => request()->getPost('cetakkan'),
          'sinopsis' => request()->getPost('sinopsis'),
          'tb_kategori_kategori' => request()->getPost('tb_kategori_id'),
          'tb_penerbit_id' => request()->getPost('tb_penerbit_id'),
          'isbn' => request()->getPost('isbn'),
          'penulis' => request()->getPost('penulis'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('Buku'));
        }
     }
 
     public function show(){
         $m = new MateriModel();
 
         return view('Buku/tampildata', [
             'data_buku' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('Buku/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new MateriModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('Buku'));
     }
 
     public function edit($id){
         $m = new MateriModel();
         $data = $m->where('id', $id)->first();
         return view('Buku/form', [
             'data' => $data
         ]);
        }
    }
