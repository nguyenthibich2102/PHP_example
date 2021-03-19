<!DOCTYPE html>
<html>
	<head>
		<title>Pratice 3</title>
	</head>
	<body>
        <?php
			$strA="Trái tim rất đắt. Đúng người thì sẽ là vô giá, sai người thì không đáng một xu";
			$strB=" ";
			$count=0;
			for($a = 0; $a < strlen ($strA); $a++){
				if( $strA[$a] == $strB) {
					$count++;
				}
			}
			echo 'Số lần xuất hiện của B trong A là : '.$count;
		?>
	</body>
</html>