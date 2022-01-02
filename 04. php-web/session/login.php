<?php
session_start();

if ($_SESSION['login'] == true) {
    header('Location: /session/member.php');
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == "yusron" && $_POST['password'] == "password") {
        $_SESSION['login'] = true;
        $_SESSION['username'] = "yusron";
        header('Location: /session/member.php');
        exit();
    } else {
        $error = "Gagal login" . PHP_EOL;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <?php if ($error != "") { ?>
        <h3><?= $error ?></h3>
    <?php } ?>

    <form action="/session/login.php" method="post">
        <label>
            Username :
            <input type="text" name="username">
        </label>
        <br>
        <label>
            Password :
            <input type="password" name="password">
        </label>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
