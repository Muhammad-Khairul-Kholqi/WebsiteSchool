<?php
session_start();
// set session agar user tidak bisa mengakses halaman ini harus login terlebih dahulu
if (!isset($_SESSION["login"])) {
    header ("location: login.php");
    exit;
}

    require 'controller.php';
    $conn = mysqli_connect("localhost", "root", "", "db_projectakr");

    if (isset ($_POST ["submit"]) ) {
        if(tambah($_POST) >  0) {
            echo "<script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'daftarguru.php';
                  </script>";
        }else {
            echo "<script>
                    alert('Data Gagal Ditambahkan!'); 
                    document.location.href = 'daftarguru.php';
                  </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 CICURUG</title>
    <!-- logo title -->
    <link rel="website icon" href="foto/logobcr.png" type="png">
</head>
<body>
    <div class="content1">
        <div class="title1">
            <p>Tambah<br>Data Guru</p>
        </div>
    </div>
    
    <div class="form_inputdata">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="title">
                <p>Form Tambah Data</p>
            </div>
            <div class="peringatan">
                <center><p><em>Note! Pastikan Penulisan Nama / Gelar Benar.</em></p></center>
            </div>
            <br><br>
            <input type="text" name="nama" required autocomplete="off" placeholder="Nama">
            <br><br>
            <select name="jabatan">
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                <option value="Guru MTK">Guru MTK</option>
                <option value="Guru Agama">Guru Agama</option>
                <option value="Guru Bahasa Indonesia">Guru Bahasa Indonesia</option>
                <option value="Guru Bahasa Inggris">Guru Bahasa Inggris</option>
                <option value="guru IPA">Guru IPA</option>
                <option value="Guru Bahasa Sunda">Guru Bahasa Sunda</option>
                <option value="Guru Seni">Guru Seni</option>
                <option value="Guru PJOK">Guru PJOK</option>
                <option value="Guru BK">Guru BK</option>
                <option value="Petugas Perpustakaan">Petugas Perpustakaan</option>
            </select>
            <br><br>
            <button type="submit" name="submit">Kirim Data</button>
        </form>
    </div>
</body>
<style>

        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

    .content1 {
        background-color: #19A7CE;
        top: 0;
        left: 0;
        right: 0;
        position: absolute;
        height: 200px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .title1 p {
        margin-top: 40px;
        margin-left: 70px;
        font-size: 45px;
        font-family: 'Kanit', sans-serif;
        font-weight: bold;
        color: #fff;
        letter-spacing: 2px;
        text-shadow: 1px 1px 10px #000;
    }

    .form_inputdata {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
            margin-top: 200px;
        }

        .form_inputdata select,
        .form_inputdata button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        ::placeholder {
            color: #000;
        }

        .form_inputdata button:hover {
            background-color: #157f9d;
        }

        .form_inputdata input{
        background-color: #fff;
        border-radius: 5px;
        width: 95%;
        padding: 10px;
        border: 1px solid #ccc;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

        .form_inputdata button {
            background-color: #19A7CE;
            color: #fff;
            cursor: pointer;
        }

        .title {
            text-align: center;
            margin-bottom: 30px;
        }

        .title p {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
</style>
</html>