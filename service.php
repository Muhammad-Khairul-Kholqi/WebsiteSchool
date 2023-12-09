<?php
session_start();
// set session agar user tidak bisa mengakses halaman ini harus login terlebih dahulu
if (!isset($_SESSION["login"])) {
    header ("location: login.php");
    exit;
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
            <a href="#service">SERVICES</a>
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
            <p>Tuliskan Yang<br>Ingin Ditanyakan</p>
        </div>
    </div>

    <!-- bagian form -->
    <div class="all_farm">
        <div class="content_form">
            <div class="input_kiri">
            <form action="send.php" method="post" target="_blank">
                <form action="send.php" >
                    <input type="neme" name="name" required autocomplete="off" placeholder="Nama" >
                    <br><br><br>
                    <input type="email" name="email" required autocomplete="off" placeholder="Email" >
                </form>
                <br><br>
            </div>
            <div class="input_kanan">
            <form action="send.php" method="post" target="_blank">
                <input type="text" name="masege" required autocomplete="off" placeholder="Pesan Anda" >
            </form>
            <br><br>
            </div>
            </div>
        </div>
        <div class="bagian_button">
            <form action="">
                <center><button type="submit" name="kirim">Kirim</button></center> 
            </form>
        </div>  
        <br><br><br><br>

    
            <!-- footer -->
<div class="container_all_footer">
    <br><br>
    <div class="container_footer">
        <div class="bag_kiri">
            <div class="kata_foto_footer">
            <div class="logo_footer">
                <img src="foto/logobcr.png">
            </div>
            <div class="kata_footer_kiri">
                <p>SMP NEGERI<br><span>2 CICURUG</span></p>
            </div>
            </div>
            <div class="alamat_footer">
                <p>Jl. Leuwinanggung, Purwasari,<br>Kec. Cicurug, Kabupaten<br>Sukabumi, Jawa Barat.</p>
            </div>
        </div>
        <div class="bag_tengah">
            <div class="title_tengah">
                <p>Kontak Kami</p>
                <hr color="#F79327" size="3" width="150px">
            </div>
            <div class="telepon_tengah">
                <p><img src="foto/telephone.png"></p>
                <p>Telepon<br>-</p>
            </div>
            <div class="whatsapp_tengah">
                <p><img src="foto/whatsapp.png"></p>
                <p>whatsapp<br>-</p>
            </div>
        </div>
        <div class="bag_kanan">
            <div class="title_kanan">
                <p>Media Sosial</p>
                <hr color="#F79327" size="3" width="160px">
            </div>
            <div class="pembungkus_ig_fb">
            <div class="instagram">
                <a href="https://www.instagram.com/smpnegeri_2_cicurug/"><img src="foto/instagram.png"></a>
                <p><a href="https://www.instagram.com/smpnegeri_2_cicurug/">instagram</a></p>
            </div>
            <div class="facebook">
                <a href="https://www.facebook.com/profile.php?id=100064772691499&locale=ms_MY"><img src="foto/facebook.png"></a>
                <p><a href="https://www.facebook.com/profile.php?id=100064772691499&locale=ms_MY">Facebook</a></p>
            </div>
            </div>
        </div>
    </div>
    <br><br>
</div>
<!-- copyright -->
<div class="penutupan">
    <br>
    <center>
        <div class="title_penutup">
        <p>2023 - SMPN 2 CICURUG</p>
        </div>
    </center>
    <br>
</div>
    
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
       background-color: #D9D9D9;
       min-height: 100px;
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

   .title1 p {
        margin-top: 140px;
        font-size: 35px;
        font-family: 'Kanit', sans-serif;
        font-weight: bold;
        color: #fff;
        letter-spacing: 2px;
        text-shadow: 1px 1px 10px #000;
        margin-left: 50px;
   }

   .content1 {
        background-color: #19A7CE;
        top: 0;
        left: 0;
        right: 0;
        position: absolute;
        height: 300px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
   }

   /* bagian inputan */
   .content_form {
        margin-top: 400px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px 30%;
   }

   .input_kiri input {
        width: 150%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
   }

   .input_kanan input {
        width: 150%;
        padding: 10px;
        border: 1px solid #ccc;
        height: 90px;
        border-radius: 5px;
   }

   ::placeholder {
       color: #000;
       font-size: 1rem;
    }

    .bagian_button button {
        width: 30%;
        padding: 10px;
        border: 2px solid #000;
        border-radius: 5px;
        background-color: #F79327;
        font-size: 1rem;
        font-weight: bold;
    }

    .bagian_button button:hover {
        box-shadow: 1px 1px 5px #000;
    }

     /* footer */
    .container_all_footer {
            background-color: #272727;
    }

.container_footer {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 5px 12%;
}

.bag_kiri {
    display: block;
}

.kata_foto_footer {
    display: flex;
}

.logo_footer img {
    width: 100px;
}

.kata_footer_kiri p {
    font-size: 25px;
    margin-left: 10px;
    font-family: 'Inter', sans-serif; 
    font-weight: bold;
    color: #ffffff;
}

.alamat_footer p {
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif; 
    color: #ffffff;
    margin-left: 10px;
}

.bag_tengah {
    display: block;
}

.title_tengah p {
    font-family: 'Inter', sans-serif; 
    font-size: 23px;
    color: #ffffff;
}

.telepon_tengah {
    display: flex;
    flex-wrap: wrap;
}

.telepon_tengah img {
    width: 30px;
}

.telepon_tengah p {
    color: #ffffff;
    margin-left: 15px;
    line-height: 1.4;
}

.whatsapp_tengah {
    display: flex;
    flex-wrap: wrap;
}

.whatsapp_tengah img {
    width: 35px;
}

.whatsapp_tengah p {
    color: #ffffff;
    margin-left: 15px;
    line-height: 1.4;
}

.bag_kanan {
    display: block;
}

.title_kanan p {
    font-family: 'Inter', sans-serif; 
    font-size: 23px;
    color: #ffffff;
}

.instagram {
    display: flex;
    flex-wrap: wrap;
    line-height: 3;
}

.instagram p {
    margin-top: -10px;
}

.instagram p a {
    margin-left: 10px;
    text-decoration: none;
    color: #ffffff;
    font-size: 20px;
}

.instagram img {
    width: 40px;
}

.facebook {
    display: flex;
    flex-wrap: wrap;
}

.facebook img {
    width: 40px;
}

.facebook p a {
    margin-left: 10px;
    text-decoration: none;
    color: #ffffff;
    font-size: 18px;
}

.pembungkus_ig_fb {
    margin-top: 20px;
}

/* copyright */
.penutupan {
    background-color: #000;
}

.title_penutup p {
    color: #ffffff;
    font-size: 20px;
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