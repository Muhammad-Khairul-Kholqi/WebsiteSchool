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
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!-- ini adalah bagian navbar, foto, dan judul -->
    <nav class="navbar">
        <!-- logo -->
        <div class="navbar-logo"><img src="foto/logobcr.png"></div>

        <!-- navbar -->
        <div class="navbar-nav">
            <a href="#home">HOME</a>
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
    
    <!-- content inti -->
    <section class="section">
        <div class="section_container">
            <div class="content">
                <br><br>
                <h1 class="title">
                    SMP NEGERI<br><span>2 CICURUG</span>
                </h1>
                <p class="description">
                Jl. Leuwinanggung, Purwasari, Kec. Cicurug,<br>Kabupaten Sukabumi, Jawa Barat
                </p>
                <div class="action_btns">
                    <button class="hubungi"><a href="about.php">Hubungi Kami</a></button>
                </div>
                <br><br>
                <div class="sosmed">
                    <a href="https://www.instagram.com/smpnegeri_2_cicurug/" id="instagram"><i data-feather="instagram"></i></a>
                    <a href="https://www.youtube.com/@smpn2cicurugchannel85" id="youtube"><i data-feather="youtube"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100064772691499&locale=ms_MY" id="facebook"><i data-feather="facebook"></i></a>
                </div>
            </div>
            <div class="image">
                <img src="foto/animasi_content4.png">
            </div>
        </div>
    </section>

    <!-- content 2  -->
    <div class="container_content_dua">
        <br><br>
        <div class="content_dua">
            <div class="akreditasi">
            <center>
                <a href="#">A</a>
                <P>Terakreditasi A<br><span>SMPN 2 Cicurug  sudah diakui<br>dan terakreditasi A</span></P>
            </center>
            </div>
            <div class="penggerak">
            <center>
                <a href="#" id="user2"><i data-feather="user-check"></i></a>
                <p>Sekolah penggerak<br><span>Mepersiapkan calon pemimpin<br>yang cerdas dan berbakat</span></p>
            </center>
            </div>
            <div class="lulusan">
            <center>
                <a href="#" id="gift"><i data-feather="gift"></i></a>
                <p>Sekolah Berprestasi<br><span>Mencetak generasi yang berprestasi<br>akademik dan non akademik</span></p>
            </center>
            </div>
            </div>
        </div>
    </div>
    <br><br>

    <!-- content 3 -->
    <div class="container_content_tiga">
        <div class="content_tiga">
            <div class="logo_bcr">
                <img src="foto/logobcr.png">
            </div>
            <div class="penjelasan_alamat">
                <p><span class="span1">Selamat Datang Di</span><br><span class="span2">SMP NEGERI 2 CICURUG</span><hr align="left" width="50%" height="1px" color="#00337C" size="3"><br><span class="span3">SMP Negeri 2 Cicurug merupakan salah satu institusi pendidikan<br>
                   negeri yang berlokasi di Jl. Leuwinanggung, Kelurahan Purwasari,<br>
                   Kecamatan Cicurug Kabupaten Sukabumi didirikan pada tahun 1993.<br>
                   Didirikan Di Atas Tanah Seluas 6,160 M².<br>
                   Menggunakan Kurikulum 2013.</span</p>
            </div>
        </div>
    </div>

    <!-- content 4 -->
    <div class="container_wrapper">
        <div class="title_vimi">
            <br>
            <center><p>Visi, Misi Dan Tujuan Sekolah</p></center>
        </div>
        <div class="container_content_empat">
            <div class="pembungkus_visi">
                <div class="visi">
                    <p>Visi<br>Sekolah</p>
                </div>
                <P>Terwujudnya lulusan<br>berprestasi, berbudaya<br>dan berakhlakul karimah</P>
            </div>
            <div class="pembungkus_misi">
                <div class="misi">
                    <p>Misi<br>Sekolah</p>
                </div>
                <p>Misi kami adalah<br>menyelenggarakan pembelajaran<br>efisien, efektif, dan<br>menyenangkan untuk<br>mengembangkan potensi<br>akademik siswa, menyediakan<br>
                   kegiatan ekstrakurikuler,<br>memastikan komitmen tinggi<br>terhadap disiplin dan budaya di<br>sekolah, serta mengembangkan<br>sikap perilaku yang amaliah<br>pada siswa.</p>
            </div>
            <div class="pembungkus_tujuan">
                <div class="tujuan">
                    <p>Tujuan<br>Sekolah</p>
                </div>
                <p>meningkatkan prestasi<br>akademik, mengembangkanb<br>keterampilan non akademik,<br>menciptakan lingkungan<br>belajar yang inklusif,<br>menanamkan nilai-nilai<br>moral dan etika</p>
            </div>
        </div>
    </div>

    <!-- content 5 --> 
    <div class="container_content_5">
    <br><br><br><br>
    <center>
        <div class="direktori">
            <p>Direktori</p>
        </div>
        </center>
        <br><br>
        <div class="all_content5">
            <div class="content5_atas">
                <div class="pembungkus_guru_tendik">
                    <div class="jumlah1">
                        <a href="daftarguru.php"><p>46</p></a>
                    </div>
                    <a class="guru_tendik_1" href="daftarguru.php"><p>Guru & Tendik</p></a>
                </div>
                <div class="pembungkus_peserta">
                    <div class="jumlah2">
                        <p>954</p>
                    </div>
                    <p>Peserta Didik</p>
                </div>
                <div class="pembungkus_ruangan">
                    <div class="jumlah3">
                        <p>29</p>
                    </div>
                    <p>Ruang Kelas</p>
                </div>
            </div>
            <div class="content5_bawah">
                <div class="pembungkus_fasilitas">
                    <div class="jumlah">
                        <p>43</p>
                    </div>
                    <p>Fasilitas</p>
                </div>
                <div class="pembungkus_akreditasi">
                    <div class="akreditasi1">
                        <p>A</p>
                    </div>
                    <p>Akreditasi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- content 6 -->
    <div class="container_content6">
    <br>
        <div class="title_content6">
            <center><p>Mengapa Memilih Kami?</p></center>
        </div>
        <div class="content6_atas">
            <div class="lokasi">
                <p><img src="foto/map.png"></p>
                <center><p class="kata_map">Lokasi Yang<br>Strategis</p></center>
            </div>
            <div class="pendidik">
                <p><img src="foto/teacher.png"></p>
                <center><p>Pendidik<br>Profesional</p></center>
            </div>
            <div class="eskul">
                <p><img src="foto/volleyball.png"></p>
                <center><p>Kegiatan<br>Eskul Fariatif</p></center>
            </div>
            <div class="dinamis">
                <p><img src="foto/book.png"></p>
                <center><p>Pembelajarn<br>Dinamis</p></center>
                <br><br>
            </div>
        </div>
    </div>

    <!-- content 7 -->
    <div class="container_content_7">
        <br><br>
        <div class="title_content7">
            <center><p>Galeri</p></center>
        </div>
        <div class="kumpulan_foto_1">
            <img src="foto/galeri1.png">
            <img src="foto/galeri2.png">
            <img src="foto/galeri3.png">
        </div>
        <br><br>
        <div class="kumpulan_foto_2">
            <img src="foto/galeri12.png">
            <img src="foto/galeri5.png">
            <img src="foto/galeri7.png">
        </div>
    </div>
    <br><br><br><br>

    <div class="kembali">
        <a class="back" href="logout.php">Sign out</a>
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
           background-color: #EEEEEE;
           min-height: 4300px;
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
    
       /* content */
       .section_container {
            display: flex;
            justify-content: space-between;
            padding: 2rem 10%;
            background-color: #19A7CE;
            /* background: linear-gradient(to right, #0E918C, #98DFD6); */
            align-items: center;
       }
    
       .section_container .image img {
            width: 400px;
        }
    
       .image img {
            margin-top: 150px;
       }
    
       .title {
            font-size: 3rem;
            font-family: 'EB Garamond', serif;
            color: #ffffff;
            text-shadow: 1px 1px 10px #000;
       }
    
       .title span {
            font-size: 4.5rem;
            font-family: 'EB Garamond', serif;
            color: #000000;
            line-height: 1;
            text-shadow: none;
       }
    
       .description {
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            color: #ffffff;
       }
    
        button {
            font-size: 18px;
            background-color: red;
            border-radius: 15px;
            padding: 7px;
            width: 150px;
            border: none;
            color: #ffffff;
            box-shadow: 0px 0px 5px #000000;
       } 
    
        button:hover {
            background-color: #D21312;
        }

        .hubungi a {
            text-decoration: none;
            color: #fff;
        }
    
       .section .sosmed a {
            margin-right: 15px;
            color: white;
            justify-content: center;
       } 
    
       .section .sosmed a:hover {
            color: red;
       }
    
       /* content 2 */
       .container_content_dua {
            background-color: #ffffff;
            box-shadow: 1px 1px 5px #000000;
            border-radius: 35px;
            margin-top: -30px;
       }
    
       .content_dua {
            display: flex;
            justify-content: space-between;
            padding: 5px 10%;
            font-family: 'Inter', sans-serif;
            flex-wrap: wrap;
       }
    
       .akreditasi a {
            color: #ffffff;
            font-family: 'Rowdies', cursive;
            font-size: 25px;
            text-decoration: none;
            background-color: #1F8A70;
            padding: 15px;
            border-radius: 5px;
       }
    
       .akreditasi {
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
       }
    
       .akreditasi span {
            font-size: 15px;
       }
    
       .penggerak {
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
       }
    
       .penggerak span {
            font-size: 15px;
       }
    
       .penggerak a {
            background-color: #1F8A70;
            color: #ffffff;
            padding: 15px;
            border-radius: 5px;
       }
    
       .lulusan {
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
       }
    
       .lulusan span {
            font-size: 15px;
       }
    
       .lulusan a {
            background-color: #1F8A70;
            color: #ffffff;
            padding: 15px;
            border-radius: 5px;
       }
    
       /* content 3 */
       .content_tiga {
            display: flex;
            flex-wrap:wrap;
            justify-content: space-between;
            padding: 2rem 15%;
       }
    
       .logo_bcr img {
            width: 300px;
       }
    
       .penjelasan_alamat {
            margin-top: 40px;
            font-family: 'Inter', sans-serif;;
            font-size: 18px;
       }
    
       .penjelasan_alamat p .span1 {
            font-size: 20px;
            color: #00337C;
       }
    
       .penjelasan_alamat .span2 {
            font-size: 30px;
            font-weight: bold;
            color: #00337C;
       }
    
       /* content 4 */
       .container_wrapper {
            background-color: #ffffff;
       }
       .title_vimi {
            font-size: 40px;
            font-family: 'Kanit', sans-serif;
            font-weight: bold;
       }
    
       .container_content_empat {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 2rem 10%;
            color: #ffffff;
    
       }
    
       .pembungkus_visi {
            background-color: #1F8A70;
            padding: 20px;
            border-radius: 15px;
            height: 230px;
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .visi {
            background-color: #6CC4A1;
            padding: 2px;
            border-radius: 10px;
            text-align: center;
            font-family: 'Kanit', sans-serif;
            font-size: 25px;
       }
    
       .pembungkus_misi {
            background-color: #1F8A70;
            padding: 20px;
            border-radius: 15px;
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .misi {
            background-color: #6CC4A1;
            padding: 2px;
            border-radius: 10px;
            text-align: center;
            font-family: 'Kanit', sans-serif;
            font-size: 25px;
       }
    
       .pembungkus_tujuan {
            background-color: #1F8A70;
            padding: 20px;
            border-radius: 15px;
            font-family: 'Inter', sans-serif;
            height: 300px;
            font-size: 18px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .tujuan {
            background-color: #6CC4A1;
            padding: 2px;
            border-radius: 10px;
            text-align: center;
            font-family: 'Kanit', sans-serif;
            font-size: 25px;
       }
    
       /* content 5 */
       .container_content_5 {
            background-color: #ffffff;
            margin-top: -40px;
       }
    
       .direktori {
            background-color: #00337C;
            color: #ffffff;
            padding: 1px;
            width: 220px;
            text-align: center;
            margin-top: 40px;
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            border-radius: 15px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .content5_atas {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 2rem 10%;
       }
    
       .pembungkus_guru_tendik {
            background-color: #ffffff;
            border: 3px solid #00337C;
            padding: 30px;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .pembungkus_guru_tendik a {
            text-decoration: none;
            color: #000000;
       }
    
       .jumlah1 {
            background-color: #D9D9D9;
            text-align: center;
            padding: 5px;
            font-size: 30px;
            font-weight: bold;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
       }
    
       .jumlah1:hover {
            box-shadow: 1px 1px 5px #000000;
       }

       .guru_tendik_1:hover {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
       }
    
       .pembungkus_peserta{
            background-color: #ffffff;
            border: 3px solid #00337C;
            padding: 30px;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .jumlah2 {
            background-color: #D9D9D9;
            text-align: center;
            padding: 5px;
            font-size: 30px;
            font-weight: bold;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
       }
    
       .pembungkus_ruangan{
            background-color: #ffffff;
            border: 3px solid #00337C;
            padding: 30px;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .jumlah3 {
            background-color: #D9D9D9;
            text-align: center;
            padding: 5px;
            font-size: 30px;
            font-weight: bold;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
       }
    
       .content5_bawah {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 2rem 30%;
       }
    
       .pembungkus_fasilitas{
            background-color: #ffffff;
            border: 3px solid #00337C;
            padding: 30px;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .jumlah {
            background-color: #D9D9D9;
            text-align: center;
            padding: 5px;
            font-size: 30px;
            font-weight: bold;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
       }
    
       .pembungkus_akreditasi{
            background-color: #ffffff;
            border: 3px solid #00337C;
            padding: 30px;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .akreditasi1 {
            background-color: #D9D9D9;
            text-align: center;
            padding: 5px;
            font-size: 30px;
            font-weight: bold;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
       }
    
       
       /* content 6 */
       .container_content6 {
            background-color: #1F8A70;
       }
    
       .title_content6 {
            font-size: 40px;
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            color: #ffffff;
       }
    
       .content6_atas {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 5px 15%;
       }
    
       .lokasi {
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            color: #ffffff;
       }
    
       .lokasi img {
            width: 80px;
            background-color: #ffffff;
            padding: 15px;
            color: #1F8A70;
            border-radius: 15px;
            box-shadow: 1px 1px 5px #000000;
       }

       .pendidik {
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            color: #ffffff;
       }
    
       .pendidik img {
            width: 80px;
            background-color: #ffffff;
            padding: 15px;
            color: #1F8A70;
            border-radius: 15px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .eskul {
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            color: #ffffff;
       }
    
       .eskul img {
            width: 80px;
            background-color: #ffffff;
            padding: 15px;
            color: #1F8A70;
            border-radius: 15px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       .dinamis {
            font-size: 20px;
            font-family: 'Inter', sans-serif;
            font-weight: bold;
            color: #ffffff;
       }
    
       .dinamis img {
            width: 80px;
            background-color: #ffffff;
            padding: 15px;
            color: #1F8A70;
            border-radius: 15px;
            box-shadow: 1px 1px 5px #000000;
       }
    
       /* content 7 */
       .title_content7 {
            font-size: 50px;
            font-weight: bold;
            font-family: 'Kanit', sans-serif;
       }
    
       .kumpulan_foto_1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 5px 10%;
       }
    
       .kumpulan_foto_1 img {
            width: 340px;
            box-shadow: 1px 1px 5px #000000;
       }

       .kumpulan_foto_1 img:hover {
          transform: scale(1.1);
       }
    
       .kumpulan_foto_2 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 5px 10%;
       }
    
       .kumpulan_foto_2 img {
            width: 340px;
            box-shadow: 1px 1px 5px #000000;
       }

       .kumpulan_foto_2 img:hover {
          transform: scale(1.1);
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

        /* tombol kembali ke login */
        .kembali a{
            text-decoration: none;
            background-color: #1F8A70;
            color: #fff;
            padding: 15px;
            margin-left: 130px;
            border-radius: 10px;
            font-weight: bold;
            font-family: 'Inter', sans-serif; 
        }
    
        .kembali a:hover {
            box-shadow: 1px 1px 5px #000;
        }

       /* media queries (responsive) */
    
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
    
            .section {
                justify-content: space-between;
            }
    
            .section .section_container .image img {
                width: 200px;
            }
    
            .section_container .title {
                font-size: 1.5rem;
            }  
            
            .section_container .title span {
                font-size: 2.5rem;
            }
    
            .section_container .description {
                font-size: 12px;
            }
    
            button {
                font-size: 12px;
                padding: 3px;
                width: 90px;
                box-shadow: 1px 1px 4px #000000;
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
    
           .section .section_container .image img {
                width: 130px;
           }
    
           .content .title {
                font-size: 0.7rem;
           }
    
           .content .title span {
                font-size: 1rem;
                line-height: 2;
           }
    
           .content .description {
                font-size: 0.5rem;
           }
    
           button {
                font-size: 0.5rem;
                width: 70px;
                box-shadow: 1px 1px 2px #000000;
           }
    
           .section_container .content {
                margin-top: 100px;
           }
    
           .section .section_container {
                margin-top: -80px;
           }
       }
    
       /* responsive tambahan */
       @media (max-width: 970px) {
        .section_container .image img {
            width: 300px;
        }
    
        .content {
            margin-top: 70px;
        }
    
        .title {
            font-size: 2rem;
       }
    
       .title span {
            font-size: 3.5rem;
       }
    
       .description {
            font-size: 15px;
       }
       }
    
       @media (max-width: 957px) {
       }
</style>
</html>