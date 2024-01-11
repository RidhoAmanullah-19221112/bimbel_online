<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Siswa</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }
        .sidebar {
            position: fixed;
            width: 0; /* Ubah lebar awal menjadi 0 */
            height: 100%;
            background: #f8f9fa;
            padding: 30px 0;
            transition: 0.5s;
        }
        .sidebar .menu-item {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: left;
            cursor: pointer;
            transition: 0.5s;
            opacity: 0; /* Ubah opasitas awal menjadi 0 */
        }
        .container {
            margin-left: 0; /* Ubah margin awal menjadi 0 */
            padding: 16px;
            transition: margin-left .5s;
        }
        .show-sidebar {
            width: 200px;
        }
        .show-container {
            margin-left: 200px;
        }
        .show-text .menu-item {
            opacity: 1;
        }
    </style>
    <script>
        function toggleSidebar() {
            var sidebar = document.querySelector('.sidebar');
            var container = document.querySelector('.container');
            sidebar.classList.toggle('show-sidebar');
            container.classList.toggle('show-container');
            sidebar.classList.toggle('show-text');
        }
    </script>
</head>
<body>
    <button onclick="toggleSidebar()">☰</button>
    <div class="sidebar">
        <form action="<?php echo base_url() ?>/Pengajar" method="post">
            <a href="Siswa.php" class="menu-item">Home</a>
            <a href="index.php" class="menu-item">Absensi</a>
            <button class="menu-item">Nilai</button>
            <a href="tampildata.php" class="menu-item">Materi</a>
            <button class="menu-item">Kelas</button>
            <button class="menu-item">Jadwal</button>
            <a href="tampildata.php" class="menu-item">Keluar</a>
        </form>
    </div>
    <div class="container">
        <!-- Konten utama akan berada di sini -->
    </div>
</body>
</html>
