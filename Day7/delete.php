<?php

$filename = $_POST['file'];

$result = unlink ('runtime/'. $filename);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
<?php if ($result) : ?>
        <p>Удалили </p>
<?php else : ?>    
        <p> Не удалили </p>
<?php endif; ?>    
        <a href="index.php">Вернуться</a>
    </body>
</html>