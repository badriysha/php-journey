<?php
// add header to HTTP Response
header('Application: PHP Web');
header('Author: Badri Yusron');

// get header from HTTP Request
$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client" . PHP_EOL;