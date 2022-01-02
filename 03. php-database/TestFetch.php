<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin";
$sql = "SELECT * FROM users WHERE username = :username AND password = :password";

$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

if ($row = $statement->fetch()) {
    echo "Sukses login: " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;