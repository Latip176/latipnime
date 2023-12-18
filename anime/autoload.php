<?php

spl_autoload_register(function ($className) {
    $file = __DIR__ . '/src/' . str_replace('\\', '/', $className) . '.php';

    if (file_exists($file)) {
        require $file;
    } else {
        die('Terjadi Error! Hubungi Latif Harkat! <a href="https://wa.me/6283870396203">click disini</a>');
    }
});
