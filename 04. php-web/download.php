<?php
if (isset($_GET['key']) && $_GET['key'] == "yus") {
    header('Content-Disposition: attachment; filename="logo-sinme-circle.png"');
    readfile(__DIR__ . "/file/logo-sinme-circle.png");

    exit();
} else {
    echo "download gagal";
}