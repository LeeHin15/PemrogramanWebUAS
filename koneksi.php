<?php

$servername = "localhost";
$database = "db_hotel";
$username = "root";
$password = "";

    $koneksi = mysqli_connect($servername, $username, $password, $database);

    if(!$koneksi) {
        die("Koneksi Gagal".mysqli_connect_error());
    }

?>