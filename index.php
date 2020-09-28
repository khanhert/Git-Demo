<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>
		<?php
		getdate();
		function tinhtong($n)
		{
			$tong=0;
			while ( $n >0) 
			{	
				$tong+=$n%10;
				$n=floor($n/10);
			}
			return $tong;
		}
		
		echo tinhtong(12345);

	?>

	</h1>
</body>
</html>
