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

			protected function set_name($text)
			{
				$this->name=$text;
			}
		}

		class Lion extends Animal
		{
			function __construct($text)
			{
				$this->set_name($text);
			}

			function roar()
			{
				echo $this->name." рычит!";
			}
		}

		$leo = new Lion("Даниил");
		$leo->roar();
	 ?>
</body>
</html>