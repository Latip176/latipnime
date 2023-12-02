<?php

include('src/RestAPI.php');
use Request\Latip176\RestAPI;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/style.js"></script>
</head>
<body>
    <div class="navbar">
        <div class="nav">
            <ul class="list">
                <li><a href="#">Home</a></li>
                <li><a href="#"><i class="fas fa-sign-in-alt"></i> Ongoing</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i> Contact Me</a></li>
                <li>
                    <form action="search" method="get">
                        <input type="text" name="keyword" class="keyword" placeholder="cari anime favorite kamu"> <button type="submit">Search</button>
                    </form>
                </li>
            </ul>
            <ul class="open">
                <li>
                    <div></div>
                    <div></div>
                    <div></div>
                </li>
            </ul>
            <ul class="close">
                <li>
                    <div></div>
                    <div></div>
                    <div></div>
                </li>
            </ul>
            <span class="nav-brand" style="font-size: 20px;">Latip176</span>
        </div>
    </div>
    <div class="navbar-content">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#"><i class="fas fa-sign-in-alt"></i> Ongoing</a></li>
            <li><a href="#"><i class="fas fa-envelope"></i> Contact Me</a></li>
            <li>
                <form action="search" method="get">
                    <input type="text" name="keyword" class="keyword" placeholder="cari anime favorite kamu"> <button type="submit">Search</button>
                </form>
            </li>
        </ul>
    </div>

    <div class="content">
        <h1>Nonton Anime - Bahasa Indonesia</h1>
        <p style="padding-top: 10px;">
            Nonton Anime tanpa Iklan hanya ada di sini! Website ini dibuat oleh Latip176 (Latif Harkat). Semua Data hasil Scraping dari otakudesu.cam.
        </p>
        <div class="container">
            <?php
            $restApi = new RestAPI();
            $results = json_decode($restApi->request("home"));
            var_dump($results);
            foreach($results as $data) {
            ?>
                <div class="card">
                    <img src="<?= $data['data']['cover'] ?>" alt="">
                    <p class="episode"><?= $data['data']['episode'] ?></p>
                    <p class="release"><?= $data['data']['release'] ?></p>
                    <a href="/baca/?data=<?= $data['data']['data'] ?>"class="judul"><?= $data['data']['judul'] ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>