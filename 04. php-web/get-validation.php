<?php
if (!isset($_GET['name']) || $_GET['name'] == "") {
    // change response code header
    http_response_code(400);
    echo "Name is Required";
    exit();
}

$name = "Hello " . htmlspecialchars($_GET['name']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable Global GET</title>
</head>
<body>
    <h1><?= $name ?></h1>
</body>
</html>