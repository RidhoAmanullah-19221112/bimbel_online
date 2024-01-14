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
    <form method="post" action="<?=base_url('Daftar/Save')?>">
    <div class="container">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="namapengajar">Nama Pengajar:</label><br>
        <input type="text" id="namapengajar" name="namapengajar"><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <label for="katasandi">Kata Sandi:</label><br>
        <input type="password" id="katasandi" name="katasandi"><br>
        <input type="submit" value="Submit">
    </div>
    </form>
</body>
</html>
