<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
        </tr>
    </thead>
    <tr>
        <td><?= $_POST['first_name'] ?></td>
        <td><?= $_POST['last_name'] ?></td>
    </tr>
</table>
</body>
</html>