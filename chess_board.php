<html>
<head>
	<title> Chess_board_PHP</title>
	<link rel="stylesheet" type="text/css" href="css/chess_board_PHP.css">
	
</head>
<body>
	<?php
	 

	echo "<table>";
 	echo "<h1>  Доска </h1>";

	  for($a=1; $a<6; $a++) {
	  	 echo "<tr>";
	  	 	for($b=1; $b<6; $b++) {
	  	 		if($a%2==0) {
	  	 			 	if ($b%2 == 0) {
	  	 			 		echo "<td class='black'>";
	  	 					echo "</td>"; 

	  	 			 	} else {
	  	 			 		echo "<td class='yellow'>";
	  	 					echo "</td>";
	  	 			 	}

	  	 			
	  	 		} else {
		  	 			if ($b%2==0) {
		  	 				echo "<td class='yellow'>";
		  	 				echo "</td>";
		  	 			} else {
		  	 				echo "<td class='black'>";
		  	 			echo "</td>";

	  	 				}
	  	 			
	  	 		}
	  	 		
	  	 	}
	  	 echo "</tr>";

	 }
	 echo "</table>";
	 setcookie("test","Hello",time()+3600);
// При следующем запросе скрипта выводит 'Hello':
echo $_COOKIE['test'];
	?>
	
</body>
</html>
