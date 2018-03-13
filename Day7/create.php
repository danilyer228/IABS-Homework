<?php

$date = date('YmdHis');
$filename = 'runtime/'. $date. '.txt';
file_put_contents($filename, $_POST['add']);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Успех</title>
    </head>
    <body>
        <h1>Успех</h1>
        <a href="index.php">Вернуться</a>
    </body>
</html>