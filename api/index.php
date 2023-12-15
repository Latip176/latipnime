<?php

$requestPath = $_SERVER['REQUEST_URI'];

if (strpos($requestPath, "/anime/") !== false) {
    require __DIR__ . '/../anime/index.php';
} else if (strpos($requestPath, "/") !== false) {
    require __DIR__ . '/../index.php';
}
