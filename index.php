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

$mysql = mysqli_connect($host, $user, $password, $database);
$mysql->set_charset("utf8");
$sql = 'select id, name from City';

$result = $mysql->query($sql);

?>
<div class="body">
    <div>
        <b>Города:</b>
    </div>
    <div class="city">
        <div>
            <?php while ($row = mysqli_fetch_array($result , MYSQLI_ASSOC)):?>
                <form action="info.php" method="post">
                    <div>
                        <input name="id" type="hidden" value="<?= $row['id']?>">
                        <input name="name" value="<?= $row['name']?>">
                        <button type="submit">info</button>
                        <a href="#">delete</a>
                        <a href="edit.php">edit</a><br>
                    </div>
                </form>
            <?php endwhile; ?>

        </div>
    </div>
    </form>

</div>

<div>
    <a href="create.php">Добавить</a>
</div>
</body>
</html>