<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Сохранение данных при вводе</h1>
		<?php
			function display_form()
			{
				$name1=isset($_REQUEST['str']) ? $_REQUEST['str'] : "";
				echo "<form method='post'>";
				echo "<input type='text' name='str' value='$name1'> <br>";
				echo "<input type='submit' >";
				echo "</form>";
			} 
			function process_data()
			{
				echo "<br>Вы написали: ".$_REQUEST['str'];
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