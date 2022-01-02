<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();
// mulai insert data
$connection->exec("INSERT INTO comments(email, comment) VALUES ('badri@mail.test', 'Hello again 1')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('badri@mail.test', 'Hello again 2')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('badri@mail.test', 'Hello again 3')");

$connection->commit();

$connection = null;