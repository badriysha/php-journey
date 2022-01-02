<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();
// mulai insert data
$connection->exec("INSERT INTO comments(email, comment) VALUES ('yusron@mail.test', 'Hello again 1')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('yusron@mail.test', 'Hello again 2')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('yusron@mail.test', 'Hello again 3')");

$connection->rollBack();

$connection = null;