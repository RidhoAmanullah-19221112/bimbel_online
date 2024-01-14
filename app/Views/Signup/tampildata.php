<!DOCTYPE html>
<html>
<head>
    <title>SignUp Success</title>
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
        input[type=button] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=button]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pendaftaran Berhasil!</h2>
        <p>Selamat, Anda telah berhasil mendaftar. Silakan login untuk melanjutkan.</p>
        <input type="button" value="Login" onclick="window.location.href='<?=base_url()?>/LoginView'">
    </div>
</body>
</html>
