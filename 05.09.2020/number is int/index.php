<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<center>
	<?php 
		function display_form()
		{
			echo "<form method='post' action >";
			echo "Введите целое число";
			echo "<br>";
			echo "<input name='number' type='text'>";
			echo "<br>";
			echo "<input type='submit' value='ok'>";
			echo "<input type='hidden' name='seen_already' value='data'>";
			echo "</form>";
		}

		$errors=array();

		function validate_data()
		{
			global $errors;

			if (strcmp($_REQUEST['number'], intval($_REQUEST['number'])))
			{
				$errors[]="<FONT COLOR='RED'> Следует ввести целое число!</FONT>";
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
			echo "Вы ввели целое число - ".$_REQUEST['number'];
		}

		if (isset($_REQUEST['number']))
		{
			validate_data();
			if (count($errors)>0)
			{
				display_errors();
				display_form();
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