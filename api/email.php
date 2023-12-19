<?php

$nama = "testing";
$email = "latipharkat48@gmail.com";
$masukan = "lu ngentot";
$ip = $_SERVER['REMOTE_ADDR'];
$to = 'latipharkat176@gmail.com';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:" . $email;
$message = "
            <html>
            <head>
              <title>HTML email</title>
            </head>
            <body>
              <p>This email contains HTML Tags!</p>
              <table>
                <tr>
                  <th>Ip</th>
                  <th>Nama</th>
                  <th>Pesan</th>
                </tr>
                <tr>
                  <td>{$ip}</td>
                  <td>{$nama}</td>
                  <td>{$masukan}</td>
                </tr>
              </table>
            </body>
            </html>
            ";
mail($to, $nama, $message, $headers);
