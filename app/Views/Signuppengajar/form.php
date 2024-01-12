<!DOCTYPE html>
<html>
<head>
    <title>SignUp</title>
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
    <form action="<?=base_url()?>/sukses" method="post">
    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Masukkan Email" name="email" required>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Masukkan Username" name="username" required>

        <label for="namapengajar"><b>Nama Pengajar</b></label>
        <input type="text" placeholder="Masukkan Nama Pengajar" name="namapengajar" required>

        <label for="jenis_kelamin"><b>Jenis Kelamin</b></label>
        <select name="jenis_kelamin">
            <option value="" disabled selected>-</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Masukkan Password" name="password" required>

        <button type="submit">Daftar</button>
    </div>
</form>
</body>
</html>
