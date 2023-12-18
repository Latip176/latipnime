<?php


require_once 'autoload.php';

use Latip176\Html;
use Latip176\RestAPI;

$HTML = new Html();
$restApi = new RestAPI();
$results = json_decode($restApi->request("home"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LatipNime - Nonton Anime subtitle Indonesia!</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/global.css">
    <script src="/assets/js/style.js"></script>

    <meta name="google-site-verification" content="QNS0JqpZlDO_0k8uJfnyvecP5Ra2TANX4rl2Kz51_C8" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2409663454221348"
     crossorigin="anonymous"></script>
    
    <meta property="og:title" content="LatipNime - Nonton Anime subtitle Indonesia" />
    <meta property="og:description" content="Nikmati pengalaman menonton anime subtitle Indonesia terbaru dan terbaik di LatipNime. Saksikan anime berkualitas HD, episode terbaru, dan koleksi lengkap. Gratis dan mudah diakses." />
    <meta property="og:image" content="https://latipnime.biz.id/favicon.ico" />
    <meta property="og:url" content="https://latipnime.biz.id/" />
    
    <meta name="author" content="Latip176 (Latif Harkat)">
    <meta name="keywords" content="streaming anime terbaik, anime subtitle Indonesia, download anime, anime HD, situs nonton anime gratis, anime ongoing, anime terpopuler">
    <meta name="description" content="Nikmati pengalaman menonton anime subtitle Indonesia terbaru dan terbaik di LatipNime. Saksikan anime berkualitas HD, episode terbaru, dan koleksi lengkap. Gratis dan mudah diakses.">
    
</head>
<body>
    <?= $HTML::navbar() ?>

    <div class="content">
        <h2>Streaming Anime - Subtitle Indonesia</h2>
        <p style="padding-top: 10px; color: #ddd">
            Nikmati pengalaman menonton anime subtitle Indonesia terbaru dan terbaik di LatipNime. Saksikan anime berkualitas HD, episode terbaru, dan koleksi lengkap. Gratis dan mudah diakses. Dibuat oleh Latip176 (Latif Harkat). Klik Judul Anime untuk Nonton!
        </p>
        <div class="container">
            <?php foreach($results->data as $data): ?>
                <div class="card">
                    <p class="cover"><img src="<?= $data->cover ?>" alt="Anime Cover"></p>
                    <p class="episode" align="center"><?= $data->episode ?></p>
                    <p class="release" align="center"><?= $data->release ?></p>
                    <a href="/anime/?data=<?= $data->data ?>"class="judul"><?= $data->judul ?></a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    
    <?= $HTML::footer() ?>
</body>
</html>
