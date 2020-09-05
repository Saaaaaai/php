<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>

		<h1>Сравнение строк</h1>

		<?php 
			function display_form()
			{
				echo "<form method='post' action=''>";
				echo "<input type='text' name='str1'><br>";
				echo "<input type='text' name='str2'><br>";
				echo "<input type='hidden' name='seen_already' value='hi'>";
				echo "<input type='submit' value='Проверить'>";
			}

			$errors=array();

			function validate_data()
			{
				global $errors;

				if (strcmp($_REQUEST['str1'], $_REQUEST['str2']))
				{
					$errors[]="<br><FONT color='red'>Строки различны!</font>";
				}
			}

			function display_errors()
			{
				global $errors;

				foreach ($errors as $err) 
				{
					echo $err."<br>";
				}
			}

			function process_data()
			{
				echo "<br><font color='green'>Строки идентичны</font>";
			}
			
			if (isset($_REQUEST['seen_already']))
			{
				validate_data();
				if (count($errors)>0)
				{
					display_form();
					display_errors();
				}
				else
				{
					display_form();
					process_data();
				}
			}
			else
			{
				display_form();
			}
	 	?>	

	</center>

</body>
</html>