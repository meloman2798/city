<?php
require_once 'connection.php';
if (isset($_POST['name']) && isset($_POST['photo'])) {
    $name = $_POST['name'];
    $photo = $_POST['photo'];
    $mysql = mysqli_connect($host, $user, $password, $database);
    $mysql->set_charset("utf8");
    $result = $mysql->query("INSERT INTO city.City (name, img) VALUES ('$name','$photo')");
    if($result == true) {
        header('Location:/index.php');
    }
}

