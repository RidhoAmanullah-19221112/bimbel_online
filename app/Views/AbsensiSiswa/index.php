<!DOCTYPE html>
<html>
<head>
    <title>Absensi</title>
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
        }/* ... (fungsi toggleSidebar Anda) ... */

        // Fungsi untuk mengubah status absensi
        function changeAttendanceStatus(studentId, attendanceStatus) {
            // Ubah teks dan nonaktifkan tombol
            var button = document.getElementById("attendanceButton" + studentId);
            button.innerHTML = attendanceStatus;
            button.disabled = true;

            // Membuat objek XMLHttpRequest
            var xhr = new XMLHttpRequest();

            // Mengatur tipe permintaan dan URL
            xhr.open("POST", "update_absensi.php", true);

            // Mengirim permintaan
            xhr.send("user_id=" + studentId + "&status=" + attendanceStatus);
        }
    </script>
</head>
<body>
    <button onclick="toggleSidebar()">☰</button>
    <div class="sidebar">
        <form action="<?php echo base_url() ?>/Pengajar" method="post">
            <a href="Pengajar.php" class="menu-item">Home</a>
            <a href="index.php" class="menu-item">Absensi</a>
            <button class="menu-item">Daftar Siswa</button>
            <button class="menu-item">Nilai Siswa</button>
            <a href="tampildata.php" class="menu-item">Materi</a>
            <button class="menu-item">Kelas</button>
            <button class="menu-item">Jadwal</button>
            <a href="tampildata.php" class="menu-item">Keluar</a>
        </form>
        <!-- ... (sidebar Anda) ... -->
    </div>
    <div class="container">
        <h1>Absensi</h1>
        <table>
            <tr>
                <th>Nama Siswa</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <!-- Anda dapat mengisi tabel ini dengan data absensi dari server Anda -->
            <tr>
                <td>'Contoh Siswa'</td>
                <td>2024-01-11</td>
                <td id="attendanceStatus1">Hadir</td>
                <td>
                    <button id="attendanceButton1" onclick="changeAttendanceStatus(1, 'Tidak Hadir')">Ubah ke Tidak Hadir</button>
                    <button id="attendanceButton1" onclick="changeAttendanceStatus(1, 'Hadir')">Ubah ke Hadir</button>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
