<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

require_once 'connection.php';

$sql = mysqli_connect($host, $user, $password, $database);




?>
<div class="body">
    <div>
        <b>Города:</b>
    </div>
    <div class="city">
        <div>
            <p>Киев
                <a href="info.php">Info</a>
                <a href="#">delete</a>
                <a href="edit.php">edit</a>
            </p>
        </div>

        <div>
            <p>Харьков
                <a href="info.php">Info</a>
                <a href="#">delete</a>
                <a href="edit.php">edit</a>
            </p>
        </div>
        <div>
            <p>Львов
                <a href="info.php">Info</a>
                <a href="#">delete</a>
                <a href="edit.php">edit</a>
            </p>
        </div>
    </div>
</div>
<div>
    <a href="create.php">Добавить</a>
</div>
</body>
</html>