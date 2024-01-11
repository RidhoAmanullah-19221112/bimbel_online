<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pengajar</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 80%;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 50px;
            border: 1px solid black;
            border-radius: 4px;
        }
        .menu-item {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: center;
            cursor: pointer;
        }
        .menu-item:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="<?php echo base_url() ?>/Pengajar" method="post">
        <button class="menu-item">Absensi</button>
        <button class="menu-item">Daftar Siswa</button>
        <button class="menu-item">Nilai Siswa</button>
        <button class="menu-item">Materi</button>
        <button class="menu-item">Kelas</button>
        <button class="menu-item">Jadwal</button>
    </div>
</body>
</html>