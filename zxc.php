<?php
session_start(); // Mulai sesi

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Pengguna belum login, arahkan ke halaman login
    header("Location: login.html");
    exit(); // Pastikan untuk keluar agar kode di bawahnya tidak dieksekusi setelah pengalihan header
}

// Pengguna sudah login, dapatkan nama pengguna dari sesi
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #32bceb;
            color: white;
            margin: 0;
            padding: 0;
        }

        a{
            text-decoration: none;
            color: #176b87;
        }

        h2{
            font-family: fantasy;
            margin-left: 100px;
            margin-top: 5px;
            font-size: 70px;
            letter-spacing: 1px;
        }


        header{
            position: fixed;
            width: 100%;
            background-color: black;

        }

        header img{
            position: fixed;
            width: 100px;
        }

        .logo2{
            position: fixed;
            width: 100px;
        }

        header{
            height: 100px;
        }

        .nav{
            position: fixed;
            right: 10px;
            top: 0;
        }

        .nav h1{
            position: relative;
            font-size: 35px;
            float: right;
            font-family: cursive;
            letter-spacing: -1px;
        }
        
    </style>
</head>
<body>
    <header>
        <a href="beranda.php"><img src="logoweb.png" width="5%" alt="logo1"></a>
        <h2>CARISINIJO</h2>
        <div class="nav">
        <h1>Selamat datang,<a href="logout2.php"><?php echo $username; ?>!  </a></h1>
        </div>
    </header>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p>hai</p>
    
    
</body>
</html>