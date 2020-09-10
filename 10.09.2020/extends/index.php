<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		class Animal
		{
			protected $name;

			function set_name($text)
			{
				$this->name=$text;
			}

			function get_name()
			{
				return $this->name;
			}

		}

		class Lions extends Animal
		{
			function roar()
			{
				echo $this->name." издал рык!";
			}
		}

		$leo=new Lions;
		$leo->set_name("Кирилл");
		$leo->roar();

	 ?>
</body>
</html>