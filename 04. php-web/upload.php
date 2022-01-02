<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file_name = $_FILES['file_upload']['name'];
    $file_type = $_FILES['file_upload']['type'];
    $file_size = $_FILES['file_upload']['size'];
    $file_tmp_name = $_FILES['file_upload']['tmp_name'];
    $file_error = $_FILES['file_upload']['error'];

    move_uploaded_file($file_tmp_name, __DIR__ . '/file/' . $file_name);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
</head>
<body>

<?php if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
<h1>File</h1>
<table>
    <tr>
        <td>File Name</td>
        <td><?= $file_name ?></td>
    </tr>
    <tr>
        <td>File Type</td>
        <td><?= $file_type ?></td>
    </tr>
    <tr>
        <td>File Size</td>
        <td><?= $file_size ?></td>
    </tr>
    <tr>
        <td>File Tmp Name</td>
        <td><?= $file_tmp_name ?></td>
    </tr>
    <tr>
        <td>File Error</td>
        <td><?= $file_error ?></td>
    </tr>
</table>
<?php } ?>

<h1>Upload File</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label>File :
        <input type="file" name="file_upload">
    </label>
    <br>
    <input type="submit" value="Upload">
</form>
</body>
</html>
