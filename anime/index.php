<?php

if(!isset($_GET['data'])) {
    header('Location: ../index.php');
}

use Latip176\Html;
use Latip176\RestAPI;

$HTML = new Html();
$data = new RestAPI($_GET['data']);
$data = json_decode($data->request("info"));
$data = $data->data;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime - <?= $data->judul ?></title>
    <link rel="icon" href="<?= $data->cover ?>">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="../assets/js/style.js"></script>
</head>
<body>
    <?= $HTML::navbar() ?>
    <div class="container">
        <div class="anime">
            <div class="cover">
                <img src="<?= $data->cover ?>" alt="<?= $data->judul ?>">
            </div>
            <div class="info">
                <div class="infoo">
                    <h2 class="judul" align="center"><?= $data->judul ?></h2>
                </div>
                <span class="studio">🎗️ Studio: <?= $data->studio ?></span>
                <span class="genre">💫 Genre: <?= $data->genre ?></span>
                <span class="durasi">⏰ Durasi: <?= $data->durasi ?> / episode </span>
                <span class="tipe">🌻 Tipe: <?= $data->tipe ?></span>
                <span class="skore">😁 Score: <?= $data->skor ?> / 10 ⭐</span>
                <span class="status">🤔 Status: <?= $data->status ?></span>
                <span class="rilis">🗓️ Tanggal Rilis: <?= $data->tanggal_rilis ?> </span>
                <span class="totalepsd">🤓 Total Episode: <?= $data->total_episode ?> </span>
            </div>
        </div>
    </div>
    
    <div class="list-episode">
        <h3 align="center">List Episode</h3>
        <hr>
        <?php foreach($data->data_episode as $dat): ?>
            <div class="list">
                <a href="/anime/view/?data=<?= $_GET['data'] ?>&episode=<?= $dat->data ?>" class="judul_episode"><?= $dat->judul_episode ?></a>
                <p class="release">Di upload pada <?= $dat->release ?></p>
            </div>
        <?php endforeach ?>
    </div>
    
    <?= $HTML::footer() ?>
</body>
</html>
