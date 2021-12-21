<?php
require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ("abdullah", "Abdullah", "abdullah@test.mail");
SQL;

$connection->exec($sql);

$connection = null;