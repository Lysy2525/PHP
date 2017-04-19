<!DOCTYPE html>
<html>
	<head>
		<title>Strona Xa PHP</title>
		<meta charset="UTF-8"></meta>
	</head>
	<body>
		<?php
			$a = $_GET["form_a"]/100;
			$b = $_GET["form_b"];
			echo "a: ".$a."</br>";
			echo "b: ".$b."</br>";
			echo "</br>";
			$BMI = $b/($a*$a);
			echo "BMI: ".$BMI."<br>";
			if ($BMI < 18.5)
			{
				echo "Niedowaga<br>";
				
			}
			if ($BMI >18.5 && $BMI<24.99)
			{
				echo "wartosc prawidlowa<br>";
			}
			if ($BMI > 25)
			{
				echo "Nadwaga<br>";
			}
		?>
	</body>
</html>