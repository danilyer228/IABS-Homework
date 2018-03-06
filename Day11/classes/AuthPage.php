<?php
	class AuthPage extends Page {
		protected function _renderFormAuth(){
		echo 
		'<form action="auth.php" method="post" class="create_article">
			<input type="text" name="login" placeholder="Введите логин"><br>
			<input type="password" name="password" placeholder="Введите пароль"><br>
			<input type="submit" value="Войти" name="submit">
		</form>';
	}
		public function getContent(){
			$this->_renderFormAuth();
			if (isset($_POST['submit'])) {
				if ($_POST['login'] == "admin" && $_POST['password'] == "123456") {
					setcookie("user", "login", time() + 3600, "/");
					echo '<p class="success">jaja</p>';
				} else {
					echo '<p class="error">nicht alein</p>';
				}
			}
		}
	}
?>