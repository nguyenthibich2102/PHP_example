<!DOCTYPE html>
<html>
<head>
	<title>Bai tap 1</title> 
</head>
<body>
	<?php
		$str = 'Write a function countWords($str) that takes any string of characters and finds the number of times each string occurs.';
		function countWords($str) {
			$new=explode(" ",$str);
			$arrayCount=array();
			for($a=0;$a<count($new);$a++) {
				$count=0;
				foreach($new as $value) {
					if($new[$a] == $value) {
						$count++;
					}
				}
				$arrayCount[$new[$a]]=$count;
			}
			return $arrayCount;
		}
		foreach(countWords($str) as $key => $value) {
			echo "[$key] => $value <br>";
		}
	?>
</body>
</html>