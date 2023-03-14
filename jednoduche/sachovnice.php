<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Šachovnice</title>

	<style>
	table {
		border-collapse: collapse;
	}
	td {
		width: 100px;
		height: 100px;
		border: 1px solid black;
	}
	.cerna {
		background: black;
	}
</style>

</head>
<body>
	<?php
	echo "<table border=1>";
	for ($radek = 1; $radek <= 8; $radek++)
	{
		echo "<tr>";
		for ($sloupec = 1; $sloupec <= 8; $sloupec++)
		{
			if (($radek + $sloupec) % 2 == 0)
			{
				echo "<td></td>";
			}
			else
			{
				echo "<td class=cerna></td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>
