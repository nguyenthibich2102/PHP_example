<!DOCTYPE html>
<html>
<head>
	<title>bai tap 4</title>
</head>
<body>
<?php
	$sum= 0;
	$i=1;
	while ($i<=100){
		$sum+=$i;
		$i++;
	}
	echo " Tổng 1 đến 100 là: ".$sum."<br>";
	echo " Tổng bình phương 1 đến 100 là: ".($sum*$sum);
?>
</body>
</html>