<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "masukan_gahwa";

    $conn = mysqli_connect($server, $username, $password, $db_name);

    if(!$conn) {
        die("Gagal terhubung ke database : ".mysqli_connect_error());
    }
?>