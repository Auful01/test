<?php

$db = 'sertif';
$username = 'root';
$host = 'localhost';
$password = '';

$connect = mysqli_connect($host, $username, $password, $db);

if (!$connect) {
    die('Koneksi Gagal!!');
}
