<?php
session_start();

if ($_SESSION['login'] != true) {
    header('Location: /session/login.php');
    exit();
}

$client = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Member</title>
</head>
<body>
    <h1>Halo <?= $client ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
