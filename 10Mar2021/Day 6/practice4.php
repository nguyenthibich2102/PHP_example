<!DOCTYPE html>
<html>
	<head>
		<title>Pratice 4</title>
	</head>
	<body>
		<table border="1px">
		<tr>
			<?php
			for($a = 1; $a < 6; $a ++) {
				echo "<td>";
				for($b = 1; $b <= 6; $b ++) {
					echo "$a * $b = " . ($a * $b);
					echo "<br>";
				}
				echo "</td>";
			}
			?>
		</tr>
		</table>
	</body>
</html>