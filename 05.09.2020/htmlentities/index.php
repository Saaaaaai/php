<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Преобразование HTML тегов</h1>
		<?php 
			function display_form()
			{
				echo "<form method='post' action=''>";
				echo "<input type='text' name='str'><br>";
				echo "<input type='submit' value='преобразовать'>";
				echo "</form>";
			}

			function process_data()
			{
				echo "<br>Введенный текст: <br>".htmlentities($_REQUEST['str'],ENT_QUOTES, 'UTF-8');
			}

			if (isset($_REQUEST['str']))
			{
				display_form();
				process_data();
			}
			else
			{
				display_form();
			}
		 ?>
	</center>
</body>
</html>