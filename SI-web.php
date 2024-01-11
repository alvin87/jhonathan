<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php") ?>
    <title>Website Desa Gumingsir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-image: url(gunung.jpg);
            background-size: cover;
            position: relative;
        }

        nav {
            background-color: #555;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        main {
            display: flex;
            flex: 1;
        }

        /* section {
            flex: 2;
            padding: 40px;
        }

        aside {
            flex: 2;
            background-color: #ddd;
            padding: 40px;
        } */

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }
        nav {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color: #aaa;
        }
        nav > a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        section {
            display: flex;
            flex-direction: row;
        }
        #hero > div:nth-child(1) {
            width: 65%;
            background-image: url('warok.jpg');
            background-size: cover;
            min-height: 450px;
            position: relative;
        }
        #hero > div:nth-child(1) > h1 {
            position: absolute;
            bottom: 3vh;
            left: 20vw;
            background-color: #ddd;
            padding: .3em;
            font-size: 1em;
        }
        #hero > div:nth-child(2) {
            width: 35%;
            display: flex;
            /* justify-content: center; */
            align-items: center;
            flex-direction: column;
        }
        #hero > div:nth-child(2) > h1 {
            font-size: 1em;
            margin: 2em;
            padding: 1em;
            background-color: gray;
            color: white;
            min-width: 80%;
            text-align: center;
        }
        #hero > div:nth-child(2) > img {
            width: 200px;
        }
        #hero > div:nth-child(2) > h4 {
            margin-top: -1em;
        }
    </style>
</head>
<body>

    <header class="flex flex-col items-center py-[0em]"><br>
            <img src="gumingsir.jpg" width="75" height="75" /><br>
                <h2 class="font-bold text-2xl">Desa Gumingsir</h2>
                <h2 class="font-bold text-2xl">Kabupaten Banjarnegara</h2>
            </ul>
    </header>

    <!-- <nav class="flex">
        <div class="flex-direction: column; items-center py-[0em] text-black bg-white">
        <a href="#">Beranda</a></div>
        <a href="#">Profl Desa</a>
        <a href="#">Pemerintah Desa</a>
        <a href="#">Lembaga Masyarakat</a>
        <a href="#">Data Desa</a>
        <a href="#">Informasi</a>
        <a href="#">Sidara</a>
        <div class="flex-direction: column; items-center py-[0em] bg-black">
        <a href="#">LOGIN</a>
    </nav> -->
    <?php include("components/navbar.php") ?>

    <section id="hero">
        <div>
            <h1>Warok Kembang Joyo</h1>
        </div>
        <div>
            <h1>APARATUR DESA GUMINGSIR</h1>
            <img src="kepala desa.jpg" alt="">
            <br>
            <h3>BEJO SUROSO</h3><br>
            <h4>Kepala Desa</h4>
        </div>
    </section>

    <div class="flex flex-col items-center py-[1em] text-white bg-zinc-500">
        ARTIKEL DESA GUMINGSIR
    </div>
    <br>
    <div id="menu">
    </div>
        <div class="w-[100vw] flex flex-row justify-around">
            <div class="w- m-4 bg-gray-100">
                <img src="berita 1.png" width="350" height="150">
                <br>
                <h1><center>GUMINGSIR BERSHOLAWAT</center></h1>
                <p>17 Oktober 2023 / Reaksi Umum<br>
                Gumingsir Bersholawat bersama Habib<br>
                Toha Bin Syech Baraqbah dari wonosobo<br>
                dan Grup Salawat Syababu Syafa’at...</p> 
            </div>
            <div class="w- m-4 bg-gray-100">
                <img src="berita 2.png" width="350" height="150">
                <br>
                <h1><center>GOTONG ROYONG</center></h1>
                <p>24 September 2023 / ALFAN FAUZI<br>
                Minggu, 24 September 2023 dilakukan gotong<br>
                royong jalan tani. Ruas yang dikerjakan yaitu<br>
                ruas Gunungreja...</p>
            </div>
            <div class="w- m-4 bg-gray-100">
                <img src="berita 3.png" width="350" height="150">
                <br>
                <h1><center>KUNJUNGAN GUBERNUR</center></h1>
                <p>03 Agustus 2023 / PEMDES GUMINGSIR<br>
                Desa Gumingsir, pada tahun ini mendapat<br>
                berkah yang luar biasa, salah satu Bakal<br>
                calon Presiden RI Yaitu...</p>
            </div>
        </div>
        <?php include("footer.php") ?>
</body>
</html>