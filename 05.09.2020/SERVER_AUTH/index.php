<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		if (!isset ($_SERVER['PHP_AUTH_USER']))
		{
			header ('WWW-Authenticate: Basic realm="workgroup"');
			header ('HTTP/1.0 401 Unauthorized');
			echo "Неавторизированный доступ запрещен";
			exit;
		}
		else
		{
			echo "Добро пожаловать,  {$_SERVER['PHP_AUTH_USER']}.";
		}
	 ?>
</body>
</html>