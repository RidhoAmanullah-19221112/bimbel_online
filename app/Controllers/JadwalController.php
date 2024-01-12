<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JadwalModel;

class JadwalController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new JadwalModel();
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

    public function tampilpengajar(){
        $m = new JadwalModel();
    
        // Fetch the schedule data
        $jadwal = $m->findAll();
    
        // Pass the schedule data to your view
        return view('/PengajarView/jadwalpengajar', [
            'jadwal' => $jadwal
        ]);
    }

    public function tampilsiswa(){
        $m = new JadwalModel();
    
        // Fetch the schedule data
        $jadwal = $m->findAll();
    
        // Pass the schedule data to your view
        return view('/SiswaView/jadwal-siswa', [
            'jadwal' => $jadwal
        ]);
    }
    
 
     public function form(){
         return view('/Kategori/formkategori');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new JadwalModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('Kategori'));
     }
 
     public function edit($id){
         $m = new JadwalModel();
         $data = $m->where('id', $id)->first();
         return view('/Kategori/formkategori', [
             'data' => $data
         ]);
        }
    }