<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 300px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }
        input[type=text], input[type=password], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="<?=base_url()?>/LoginView" method="post">
    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Masukkan Email" name="email" required>

        <label for="katasandi"><b>Password</b></label>
        <input type="password" placeholder="Masukkan Password" name="katasandi" required>

        <label for="tingkat"><b>Pilih Sebagai</b></label>
        <select name="tingkat" value="<?=$tingkat['tingkat']?? ''?>">
            <option value="" disabled selected>-</option>
            <option value="Pengajar">Pengajar</option>
            <option value="Siswa">Siswa</option>
        </select>

        <button type="submit">Login</button>
    <p>Belum memiliki akun? <a href="<?=base_url('Daftar')?>">Daftar di sini</a></p>
    </div>
</body>
</html>