<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Подсчёт 'rar'</h1>
		<?php 
			function display_form()
			{
				echo "<FORM method='post' action=''>";
				echo "<input type='text' name='str'><br>";
				echo "<input type='hidden' name='seen_already'>";
				echo "<input type='submit' value='проверить'>";
				echo "</form>";
			}

			$errors=array();

			function validate_data()
			{
				global $errors;
				if(!preg_match('/rar/i', $_REQUEST['str']))
				{
					$errors[]="<font color='red'>Вхождения 'rar' не обнаружено!</font>";
				}
			}

			function process_data()
			{
				echo "вы rar'нули";
			}

			function display_errors()
			{
				global $errors;
				foreach ($errors as $err) 
				{
					echo $err."<br>";
				}
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