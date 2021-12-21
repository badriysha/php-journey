<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "admin'; #"; // contoh script SQL Injection
$password = "admisalah";
$sql = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password';";

$statement = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses login: $find_user" . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;