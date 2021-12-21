<?php

$host = "localhost";
$port = 8889;
$database = "php_database";
$username = "root";
$password = "root";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terhubung ke database MySQL" . PHP_EOL;

    // menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Gagal terhubung ke database MySQL :" . $exception->getMessage();
}