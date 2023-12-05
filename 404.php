<?php

require_once 'autoload.php';

use Latip176\Html;
$HTML = new Html();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/global.css">
    <script src="/assets/js/style.js"></script>
    <title>Not Found - 404</title>
</head>
<body>
    <?= $HTML::navbar() ?>
    
    <h3 align="center" style="padding-top: 200px; padding-bottom: 40vh; margin: 10px;">Halaman yang Kamu Tuju tidak Ada! Not Found - 404 :(</h3>
    
    <?= $HTML::footer() ?>
</body>
</html>