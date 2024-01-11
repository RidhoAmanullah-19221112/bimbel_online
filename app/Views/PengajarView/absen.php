<!DOCTYPE html>
<html>
<head>
    <title>Absensi</title>
    <style>
        /* ... (style Anda) ... */
    </style>
    <script>
        /* ... (fungsi toggleSidebar Anda) ... */

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
