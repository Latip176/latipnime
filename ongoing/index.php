<?php

require_once '../autoload.php';

use Latip176\Html;
use Latip176\RestAPI;

$HTNL = new Html();
if(!isset($_GET['page'])) {
    $restApi = new RestAPI();
    $results = json_decode($restApi->request("ongoing"));
} else {
    $restApi = new RestAPI($_GET['page']);
    $results = json_decode($restApi->request("ongoing"));
}

if($results->data->next != "None") {
    $no = preg_match("/page\-(\d+)/", $results->data->next, $hasil);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/ongoing/style.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <script src="../assets/js/style.js"></script>
    <title>List Ongoing Anime</title>
</head>
<body>
    <?= $HTNL::navbar() ?>
    
    <div class="content">
        <h2 align="center">Ongoing Anime</h2>
        <div class="container">
            <?php foreach($results->data->data_anime as $data): ?>
                <div class="card">
                    <p class="cover"><img src="<?= $data->cover ?>" alt="Anime Cover"></p>
                    <p class="episode" align="center"><?= $data->episode ?></p>
                    <p class="release" align="center"><?= $data->release ?></p>
                    <a href="/anime/?data=<?= $data->data ?>"class="judul"><?= $data->judul ?></a>
                </div>
            <?php endforeach ?>
        </div>
        <div style="display: flex; justify-content: center; ">
            <div class="menu" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; background-color: #1a1a1a; color: #ffffff; padding: 10px;">
                <?php if(isset($_GET['page']) && $_GET['page'] >= 2): ?>
                    <a href="/ongoing/?page=<?= $_GET['page']-1 ?>" class="prev" style="text-align: center; color:white;">&lt; Sebelumnya</a>
                <?php endif ?>
                <?php if($results->data->next != "None"): ?>
                    <a href="/ongoing/?page=<?= $hasil[1] ?>" class="next" style="text-align: center; color: white;">Selanjutnya &gt;</a>
                <?php endif ?>
            </div>
        </div>
    </div>
    
    <?= $HTNL::footer() ?>
</body>
</html>