<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Pengajar</title>
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
        .jadwal {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 20px;
            box-sizing: border-box;
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
    <div class="sidebar">
    <form action="<?php echo base_url() ?>/Dashboard/Siswa/Home" method="post">
            <button class="menu-item">Home</button>
        </form>
        <form action="<?php echo base_url() ?>/Dashboard/Siswa/Absensi" method="post">
            <button class="menu-item">Absensi</button>
        </form>
        <form action="<?php echo base_url() ?>/Dashboard/Siswa/Nilai-Siswa" method="post">
            <button class="menu-item">Nilai</button>
        </form>
        <form action="<?php echo base_url() ?>/Dashboard/Siswa/Materi-Siswa" method="post">
            <button class="menu-item">Materi</button>
        </form>
        <form action="<?php echo base_url() ?>/Dashboard/Siswa/Kelas" method="post">
            <button class="menu-item">Kelas</button>
        </form>
        <form action="<?php echo base_url() ?>/Dashboard/Siswa/Jadwal" method="post">
            <button class="menu-item">Jadwal</button>
        </form>
        <form action="<?php echo base_url() ?>/keluar" method="post">
            <button class="menu-item">Logout</button>
        </form>
    </div>
    <div class="container">
        <h1>Jadwal Pengajar</h1>
        <div class="jadwal">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Sesi</th>
                        <th>Judul Materi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($jadwal as $row): ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['hari']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td><?= $row['jam']; ?></td>
                        <td><?= $row['sesi']; ?></td>
                        <td><?= $row['judulmateri']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
