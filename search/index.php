<?php

require_once '../autoload.php';

if(!isset($_GET['keyword'])) {
    header('Location: index.php');
}

use Latip176\Html;
use Latip176\RestAPI;

$HTML = new Html();
$keyword = $_GET['keyword'];

$data = new RestAPI($keyword);
$data = json_decode($data->request("search"));
$data = $data->data;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Searching <?= $keyword ?></title>
    <link rel="stylesheet" href="/search/style.css">
    <link rel="stylesheet" href="../assets/css/global.css">
    <script src="../assets/js/style.js"></script>
</head>
<body>
    <?= $HTML::navbar() ?>
    
    <div class="container">
        <h2 align="center">Search keyword "<?= $keyword ?>"</h2>
        <div class="list-anime">
            <?php foreach($data->data as $dat): ?>
                <div class="anime-card">
                    <div class="cover">
                        <img src="<?= $dat->cover ?>" alt="Cover Anime">
                    </div>
                    <div class="info">
                        <h3><a href="../anime/?data=<?= $dat->data ?>"><?= $dat->judul ?></a></h3>
                        <p>💫 Genre: <?= $dat->genres ?></p>
                        <p>😁 Rating: <?= $dat->rating ?> ⭐</p>
                        <p>🤔 Status: <?= $dat->status ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    
    <?= $HTML::footer() ?>
</body>
</html>