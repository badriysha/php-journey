<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);
$query = $statement->fetchAll();

var_dump($query);

$connection = null;