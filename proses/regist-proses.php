<?php
include_once '../helper.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!$connect) {
    die('Koneksi Gagal!!');
}

$sql = "INSERT INTO users VALUES ('','$nama','$alamat', $hp, '$email', '$password')";
$query = mysqli_query($connect, $sql);

header("location:../index.php?p=beranda");
