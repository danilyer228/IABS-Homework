<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>auth.php</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			require_once 'classes/loader.php';
			
			$page = new AuthPage;
			$page->render();
		?>
		<button><a href="index.php">Вернуться</a></button>
	</body>
</html>