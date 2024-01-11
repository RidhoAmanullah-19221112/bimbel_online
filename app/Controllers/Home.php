<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboardp(): string
    {
        return view('Dashboard/Pengajar', [
            'Pengajar' => session()->get('Pengajar')]
        );
    }

    public function dashboardsiswa(): string
    {
        return view('Dashboard/Siswa', [
            'Siswa' => session()->get('Siswa')]
        );
    }
}