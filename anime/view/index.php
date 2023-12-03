<?php

if(!isset($_GET['episode'])) {
    header('Location: ../../index.php');
}

$datanime = $_GET['data'];
if($_GET['episode']=="None") {
    echo("<script>alert('Episode Tidak Tersedia!'); window.location.href='../?data={$datanime}'; </script>");
}

require_once '../../autoload.php';

use Latip176\Html;
use Latip176\RestAPI;

$HTML = new Html();
$epsdata = $_GET['episode'];
$data = new RestAPI($epsdata);
$data = json_decode($data->request("view"));
$data = $data->data;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <script src="../../assets/js/style.js"></script>
    <title>Nonton - <?= $data->judul_episode ?></title>
</head>
<body>
    <?= $HTML::navbar() ?>
    
    <div class="stream">
        <h3><?= $data->judul_episode ?></h3>
        <iframe src="<?= $data->stream ?>" frameborder="1" allowfullscreen></iframe>
        <p style="padding-top: 20px; color: #ddd;">Pastikan Koneksi Internet Anda bagus untuk Streaming. Video tidak terload padahal sinyal bagus? Berarti muka Anda jelek:v Becanda ^^. Silahkan refresh Halaman Ini dan bila masih tidak terload Silahkan Screenshoot dan laporkan <a href='https://wa.me/6283870396203'>Disini</a></p>
        <div class="button">
            <div class="prev">
                <a href="?data=<?= $datanime ?>&episode=<?= $data->prev ?>" class="prev">Episode Sebelumnya</a>
            </div>
            <div class="next">
                <a href="?data=<?= $datanime ?>&episode=<?= $data->next ?>" class="next">Episode Selanjutnya</a>
            </div>
        </div>
    </div>
    
    <?= $HTML::footer() ?>
</body>
</html>