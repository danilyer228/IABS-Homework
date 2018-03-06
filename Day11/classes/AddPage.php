<?php
	class AddPage extends Page {
		const DELIMITER = "%%%X%%%";
		const ARTICLE_PATH = "articles";
		
		protected function _renderForm(){
			echo '<div>
					<form method="post" action="add.php" class="create_article">
						<table width="100%" cellspacing="0" cellpadding="4">
							<tr> 
								<td align="right" width="100"><h3>Название:</h3></td>
								<td><input type="text" name="title" maxlength="50" size="20" placeholder="Добавьте название"></td>
							</tr>
							<tr> 
								<td align="right" valign="top"><h3>Контент:</h3></td>
								<td><textarea name="content" cols="35" rows="10" placeholder="Добавьте описание"></textarea></td>
							</tr>
							<tr> 
								<td></td>
								<td><input type="submit" value="Сохранить" name="Send" id="add"></td>
							</tr>
						</table>
					</form>
				  </div>';
		}
		public function getContent(){
			$this->_renderForm();
			if (isset($_POST['Send'])){
				$content = $_POST['title'] . self::DELIMITER . $_POST['content'];
				file_put_contents('articles' . DIRECTORY_SEPARATOR . time() . '.txt', $content);
				echo "Статья сохранена";
			}
		}
		
	}
?>