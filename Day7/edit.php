<?php

$filename = $_POST['file'];

$content = file_get_contents('runtime/'. $filename);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <form action="save.php" method="post">
        <input type="text" name="todo" value="<?php echo $content; ?>">
        <input type="hidden" name="file" value="<?php echo $filename;?>">
        <input type="submit" value="save">
    </form>
</html>