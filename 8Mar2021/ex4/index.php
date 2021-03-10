<!DOCTYPE html>
<html>
<head>
	<title>bai 4</title>
</head>
<body>
<?php
	$masanpham = "EV2009";
	$tensanpham = "tấm hợp kim nhôm ngoài trời EV2009";
	$soluong = 500;
	$dongia = 160000;
	$VAT = 0.05;
    
	echo $masanpham."<br>".$tensanpham."<br>".$soluong."<br>".$dongia."<br>";
	echo "Không thuế: ".$soluong*$dongia."<br>";
	echo "Có thuế: ".$soluong*$dongia*$VAT;
?>
</body>
</html>