<?php

function getConnection() : PDO
{
    $host = "localhost";
    $port = 8889;
    $database = "php_database";
    $username = "root";
    $password = "root";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}