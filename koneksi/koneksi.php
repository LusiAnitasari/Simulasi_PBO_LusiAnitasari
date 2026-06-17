<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "DB_SIMULASI_PBO_TI1C_LusiAnitasari";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi ke database simulasi gagal: " . mysqli_connect_error());
}