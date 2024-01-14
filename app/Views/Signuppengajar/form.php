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
        <input type="hidden" name="id" value="<?=$data['id']?? ''?>" >
        
        <label for="email"><b>Email</b></label>
        <input type="text" name="email" placeholder="Masukkan Email" required value="<?=$data['email']?? ''?>">

        <label for="username"><b>Username</b></label>
        <input type="text" name="username" placeholder="Masukkan Username" required value="<?=$data['username']?? ''?>">

        <label for="namapengajar"><b>Nama Pengajar</b></label>
        <input type="text" name="namapengajar" placeholder="Masukkan Nama Pengajar" required value="<?=$data['namapengajar']?? ''?>">

        <label for="jeniskelamin"><b>Jenis Kelamin</b></label>
        <select name="jeniskelamin" value="<?=$data['jeniskelamin']?? ''?>">
            <option value="" disabled selected>-</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>

        <label for="password"><b>Password</b></label>
        <input name="password" type="password" placeholder="Masukkan Password" required value="<?=$data['password']?? ''?>">
        
        <button type="submit">Daftar</button>
    </div>
    </form>
</body>
</html>
