<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>index.php</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			echo '<button class="login"><a href="auth.php">Войти</a></button>';
			echo '<button class="link"><a href="add.php">Добавить статью</a></button>';
			require_once 'classes/loader.php';

			$page = new IndexPage();
			$page->render();

		?>
	</body>
</html>