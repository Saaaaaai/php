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

			function __construct($name)
			{
				$this->FirstName=$name;
			}

			/*function set_name($name)  //сеттер можно использовать для переопределения конструктора, сам же конструктор используется для инициализации начального значения свойств.
			{
				$this->FirstName=$name;
			}*/

			function get_name()
			{
				return $this->FirstName;
			}
		}

		$obj = new Human("sdf");
		echo $obj->get_name();
	 ?>
</body>
</html>