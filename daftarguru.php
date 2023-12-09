<?php
    session_start();
    require 'controller.php';
// set session agar user tidak bisa mengakses halaman ini harus login terlebih dahulu
if (!isset($_SESSION["login"])) {
    header ("location: login.php");
    exit;
}

$students = query("SELECT * FROM tbl_daftarguru");

    if(isset($_POST["kirim"])) {
        $students = cari($_POST["menjelajahi"]);
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
    <!-- link js untuk feather-->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <!-- ini adalah bagian navbar, foto, dan judul -->
    <nav class="navbar">
        <!-- logo -->
        <div class="navbar-logo"><img src="foto/logobcr.png"></div>

        <!-- navbar -->
        <div class="navbar-nav">
            <a href="index.php">HOME</a>
            <a href="service.php">SERVICES</a>
            <a href="blog.php">BLOG</a>
            <a href="about.php">ABOUT US</a>
        </div>

        <!-- hamburger menu -->
        <div class="navbar-extra">
            <a href="#" id="user"><i data-feather="user"></i></a>
            <a href="https://www.instagram.com/khrlkh10/" id="instagram"><i data-feather="instagram"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <!-- content 1 -->
    <div class="content1">
        <div class="title1">
            <p>Cari Guru</p>
        </div>
    </div>

    <br><br><br><br>
    <div class="kseleruhan_content">
        <div class="content_1">
            <div class="content_kiri">
                <form action="" method="post">
                    <input type="text" name="menjelajahi" placeholder="Search..." autocomplete="off">
                    <button type="submit" name="kirim">Cari</button>
                </form>
            </div>
            <div class="content_kanan">
                <div class="logo_bcr">
                    <img src="foto/logobcr.png">
                </div>
                <div class="title_kanan">
                    <p><span class="span1">SMP NEGERI</span><span class="span2"><br>2 CICURUG</span></p>
                </div>
            </div>
        </div>
        <hr align="center" width="60%" height="2px" color="#000" size="3"><br><span class="span3">
    </div>

    <!-- table daftar guru -->
    <br><br><br><br>
    <center>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Guru Mapel / Jabatan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $scool) : ?>
            <tr>
                <td><center><?= $scool["nama"] ?></center></td>
                <td><center><?= $scool["jabatan"] ?></center></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </center>

    <!-- tambah data -->
    <br><br><br>
    <center>
    <div class="tambah">
    <button><a href="logindata.php">Tambah Data Guru</a></button>
    </div>
    </center>
    <br><br><br>

    
    <div class="peringatan">
        <p><em>Note! Karna kurangnya informasi nama guru /<br>
        staf tidak lengkap.</em></p>
    </div>
    <br><br>
</body>
<!-- feather icons -->
<script>
    feather.replace()
</script>

<!-- script js -->
<script src="js/script.js"></script>

<style>
       /* fonts */
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Roboto+Slab:wght@500&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Inter:wght@500&family=Roboto+Slab:wght@500&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Inter:wght@500&family=Roboto+Slab:wght@500&family=Rowdies:wght@300&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Kanit&display=swap');
   /* navbar */
   body {
       background-color: #fff;
       min-height: 950px;
       margin: 0;
       padding: 0;
   }

   .navbar {
       display: flex;
       justify-content: space-between;
       align-items: center;
       padding: 0.1rem 5%;
       background-color: #ffffff;
       position: fixed;
       top: 0;
       left: 0;
       right: 0;
       z-index: 9999;
       box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
   }

   .navbar-logo img {
       width: 5rem;
   }

   .navbar .navbar-nav a {
       color: #000000;
       display: inline-block;
       font-size: 22px;
       font-family: 'Inter', sans-serif;
       margin: 0 1rem;
       text-decoration: none;
       
   }

   .navbar .navbar-nav a:hover {
       color: #1F8A70;
   }

   .navbar .navbar-nav a::after {
       content: '';
       display: block;
       padding-bottom: 0.5rem;
       border-bottom: 3px solid #1F8A70;
       transform: scaleX(0);
       transition: 0.2s linear;
   }

   .navbar .navbar-nav a:hover::after {
       transform: scaleX(0.5);
   }

   .navbar .navbar-extra a {
       color: black;
       margin: 0 0.5rem;
   }

   .navbar .navbar-extra a:hover {
        color: #1F8A70;
   }

   .navbar .navbar-extra a:hover {
       color: #00337C;
   }

   #hamburger-menu {
       display: none;
   }

   /* content 1 */
   .title1 {
        display: flex;
        justify-content: space-between;
        padding: 2rem 10%;
        background: linear-gradient(to right, #19A7CE, #19A7CE);
        align-items: center;
   }

   .title1 p {
        margin-top: 140px;
        font-size: 40px;
        font-family: 'Kanit', sans-serif;
        font-weight: bold;
        color: #fff;
        letter-spacing: 2px;
        text-shadow: 1px 1px 10px #000;
   }

   .title_pesan p {
        font-size: 35px;
        font-family: 'Inter', sans-serif;
        font-weight: bold;
        margin-left: 50px;
   }

   /* content serching */
   .content_1 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 10px 15%;
   }

   .content_kiri input {
        width: 300px;
        padding: 15px;
        border: 2px solid #000;
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;
   }

   .content_kiri button {
        padding: 15px;
        margin-left: -10px;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        border-right: 2px solid #000;
        border-top: 2px solid #000;
        border-bottom: 2px solid #000;
        background-color: #1F8A70;
        color: #fff;
        font-weight: bold;
   }

   .content_kiri button:hover {
        background-color: #22A699;
        cursor: pointer;
   }


   ::placeholder {
        padding-left: 5px;
        color: #000;
        font-size: 1rem;
   }

   .content_kanan {
        display: flex;
        flex-wrap: wrap;
   }

   .logo_bcr img {
        width: 100px;
        margin-top: -30px;
   }

   .title_kanan p .span1 {
        font-size: 20px;
        font-family: 'Inter', sans-serif; 
   }

   .title_kanan p .span2 {
        font-weight: bold;
        font-size: 25px;
        font-family: 'Inter', sans-serif; 
   }

   .title_kanan p {
        margin-top: -10px;
        margin-left: 5px;
   }

   .tambah button  {
        background-color: #F79327;
        padding: 10px;
        width: 300px;
        border: 3px solid #000;
        border-radius: 10px;
   }

   .tambah button:hover {
        box-shadow: 1px 1px 5px #000;
   }

   .tambah button a {
        text-decoration: none;
        color: #000;
        font-size: 18px;
        font-weight: bold;
   }

   .peringatan p {
        color: red;
        text-align: center;
   }

    /* responsive */

   /* laptop */
   @media (max-width: 1366px) {
       .navbar .navbar-nav a {
           font-size: 20px;
       }

       .image img {
            width: 400px;
            margin-left: -100px;
       }

       .navbar-logo img {
           width: 85px;
       }
   }

   /* tablet */
   @media (max-width: 758px) {
       .navbar .navbar-nav a {
           font-size: 62.5%;
       }

       .navbar-logo img {
           width: 60px;
           margin-left: 30px;
       }

       #hamburger-menu {
           display: inline-block;
       }

       .navbar .navbar-nav {
           position: absolute;
           top: 100%;
           right: -100%;
           background-color: #ffffff;
           width: 18.3rem;
           height: 70vh;
           transition: 0.3s;
           border-top: 3px solid red;
       }

       .navbar .navbar-nav.active {
           right: 0;
       }

       .navbar .navbar-nav a {
           color: black;
           display: block;
           margin: 1.5rem;
           padding: 0.5rem;
           font-size: 18px;
       }

       .navbar .navbar-nav a::after {
           transform-origin: 0 0 ;
       }

       .navbar .navbar-nav a:hover::after {
           transform: scaleX(0.2);
       }

       .navbar .navbar-nav a:hover {
           color: #00337C;
       }

       .navbar .navbar-nav a::after {
            border-bottom: 3px solid #00337C;
       }
   }

   /* mobile phone */
   @media (max-width: 450px) {
       .navbar .navbar-nav a {
           font-size: 80%;
           padding: 1px;
       }

       .navbar-logo img {
           width: 40px;
       }

       .navbar .navbar-nav {
           width: 10rem;
           height: 45vh;
           transition: 0.3s;
           border-radius: 0 0 10px 10px; 
       }
   }
</style>
</html>