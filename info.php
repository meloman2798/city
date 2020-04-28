<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<div class="info">
    <div>
        <form id="city" action="info.php" method="post">
            <select form="city" name="select">
                <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):; ?>
                    <option name="id" value="<?php echo $row['id'] ?>"> <?php echo $row['name'] ?> </option>
                <?php endwhile; ?>
            </select>
            <button type="submit">Выбор города</button>
        </form>
        <?php
        if (isset($_POST['select'])) {
            $select = $_POST['select'];

            $mysql = mysqli_connect($host, $user, $password, $database);
            $mysql->set_charset("utf8");
            $sql = 'select * from City ';
            $id = 'where id =' . $_POST['select'];
            $sql = $sql . $id;
            $res = $mysql->query($sql);

            if ($res == true) {
                $sql_sec = 'select name, img from City ';
                $idSec = 'where id =' . $_POST['select'];
                $sql_sec = $sql_sec . $idSec;
                $result = $mysql->query($sql_sec);

                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):?>
                    <p><?php echo $row['name'], '<br>';
                    echo $row['img'] ?><?php endwhile; ?></p>
            <?php }
        } ?>

    </div>
    <div>
        <?php
        $sql = 'select name from City ';
        $id = 'where id = ' . $_POST['id'];
        $sql = $sql . $id;
        $result = $mysql->query($sql);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
        <p><?php echo $row['name']; ?><?php endwhile; ?></p>
    </div>
    <div>
        <img src="#">
        <?php
        $sql = 'select img from City';
        $id = 'where id =' . $_POST['id'];
        $sql = $sql . $id;
        $result = $mysql->query($sql);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
            <?php echo $row['img'] ?>
        <?php endwhile; ?>
    </div>
    <div>
        <a href="index.php">Back</a>
    </div>

</div>

</body>
</html>
