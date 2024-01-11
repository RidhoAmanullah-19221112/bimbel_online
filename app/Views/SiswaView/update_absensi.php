<?php
    // Mengambil data dari permintaan POST
    $user_id = $_POST['user_id'];
    $status = $_POST['status'];

    // Membuat koneksi ke database
    $conn = new mysqli('localhost', 'username', 'password', 'database');

    // Mengecek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query SQL untuk memperbarui status absensi
    $sql = "UPDATE tb_absensi SET STATUS='$status' WHERE user_id=$user_id";

    // Menjalankan query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
?>