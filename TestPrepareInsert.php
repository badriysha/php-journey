<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "yusron";
$password = "root";
$sql = "INSERT INTO users(username, password) VALUES (:username, :password)";

$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$connection = null;