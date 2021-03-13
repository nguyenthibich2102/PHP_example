<!DOCTYPE html>
<html>
<head>
	<title>bai tap 3</title>
</head>
<body>
<?php
$sum = 0;
$a = 1;
while ($a < 100) {
    $sum += $a;
    $a++;
}
echo "Tổng các số từ 1-100 là: $sum <br>";

$sum1=0;
echo "các số chia hết cho 3 từ 20-50 là: ";
for($b=20;$b<50;$b++){
    if($b%3==0){
        echo $b.',';
    }
}
?>
</body>
</html>