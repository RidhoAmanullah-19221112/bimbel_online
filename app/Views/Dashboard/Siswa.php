<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Siswa</title>
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
    <form action="<?php echo base_url() ?>/Siswa" method="post">
        <button class="menu-item">Absensi</button>
        <div class="menu-item">Nilai</div>
        <div class="menu-item">Materi</div>
        <div class="menu-item">Kelas</div>
        <div class="menu-item">Jadwal</div>
    </div>
</body>
</html>