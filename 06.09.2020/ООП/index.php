<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		class Human
		{
			private $FirstName;

			function set_name($FName)
			{
				$this->FirstName=$FName;
			}

			function get_name()
			{
				return $this->FirstName;
			}
		}

		$Human1 = new Human;
		$Human1->set_name("Никита");
		echo "Имя первого человека - ", $Human1->get_name();
	 ?>
</body>
</html>