<?php
    $students = scandir('runtime');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Список студентов</title>
    </head>
    <body>
        <h1>Список студентов</h1>
        <form action="create.php" method="post">
            <input name="add" type="text">
            <input type="submit" value="create">
        </form>
        <ul>
            <?php if (empty($students)) : ?>
            <p>Список пуст</p>
            <?php else : ?>
                <?php foreach ($students as $file) : ?>
                <?php if (is_file("runtime/".$file)) :?>
                <li>
                    <?php echo file_get_contents("runtime/".$file); ?>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="file" value="<?php echo $file; ?>">
                        <input type="submit" value="delete">
                    </form>
                    <form action="edit.php" method="post">
                        <input type="hidden" name="file" value="<?php echo $file; ?>">
                        <input type="submit" value="edit">
                    </form>                    
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </body>
</html>