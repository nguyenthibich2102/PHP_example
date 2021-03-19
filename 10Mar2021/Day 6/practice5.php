<!DOCTYPE html>
<html>
   <head>
      <title>Pratice 5</title>
   </head>
   <body>
		<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">  
		<!-- Ô có độ rộng 270px (8 cột x 60px) -->  
		<?php  
			for($a=1; $a <= 8; $a++)  
			{  
				echo "<tr>";  
				for($b=1; $b <=8; $b++)  
				{  
					$total=$a + $b;  
					if($total%2 == 0)  
					{  
					echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";  
					}  
					else  
					{  
					echo "<td height=30px width=30px bgcolor=#000000></td>";  
					}  
				}  
				echo "</tr>";  
			}  
			?>  
     </table>       
   </body>
</html>