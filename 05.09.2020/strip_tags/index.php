<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Удаление html тегов</h1>
		<?php
			function display_form()
			{
				echo "<form method='post' action=''>";
				echo "Введите текст:<br>";
				echo "<input type='text' name='text'>";
				echo "<input type='submit' value='ok'>";
			}

			function process_data()
			{
				echo "<br>Вы ввели: ".strip_tags($_REQUEST['text']);
			}

			if (isset($_REQUEST['text'])) 
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