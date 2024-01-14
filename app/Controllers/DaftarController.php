<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengajarModel;

class DaftarController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new PengajarModel();
        $data = [
          'email' => request()->getPost('email'),
          'username' => request()->getPost('username'),
          'namapengajar' => request()->getPost('namapengajar'),
          'jeniskelamin' => request()->getPost('jeniskelamin'),
          'katasandi' => request()->getPost('katasandi'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('login'));
        }
    }

    public function create1() {
        // Get POST data
        $email = $_POST['email'];
        $username = $_POST['username'];
        $namapengajar = $_POST['namapengajar'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $password = $_POST['password'];

        // Create a new instance of your model
        $data = new PengajarModel();
        
        // Call the create method on the model
        if($data->create1($email, $username, $namapengajar, $jeniskelamin, $password)) {
            // Redirect or show a success message
        } else {
            // Handle the error
        }
    }
}
