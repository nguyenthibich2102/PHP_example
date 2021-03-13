<!DOCTYPE html>
<html>
<head>
	<title>bai tap 5</title>
</head>
<body>
    <?php
    $string1 = "rayy@gmail.com";
    $string2 = "rayy";
    $result = "";
    for ($i = 0; $i < strlen($string1); $i++) {
        $result .= $string1[$i];
        if ($i == strlen($string2) - 1) {
            break;
        }
    }
    echo "$result";
    ?>
</body>
</html>