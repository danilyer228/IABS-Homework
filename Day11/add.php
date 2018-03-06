<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>add.html</title> 
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			require_once 'classes/loader.php';
			
			$page = new AddPage;
			$page->render();
		?>
	</body>
</html>