<?php

	#Condiciones
	echo "CONDICIONES<br><br>";
	$a = 5;
	$b = 10;

	if($a > $b){
		echo "a es mayor que b";
	}
	else if ($a == $b){
		echo "a es igual que b";
	}
	else {
		echo "a es menor que b";
	}

	echo "<br><br>";

	#Switch
	echo "SWITCH<br><br>";
	$dia = "sabado";

	switch ($dia) {
		case 'viernes':
			echo "me voy de cena";
			break;
		
		case 'sabado':
			echo "voy a estudiar php";
			break;

		case 'domingo':
			echo "descanso";
			break;
	}

	echo "<br><br>";

	#Ciclo WHILE
	echo "Ciclo WHILE<br><br>";
	$n = 0;

	while($n <= 5){
		echo $n."<br>";
		$n++;
	}

	echo "<br><br>";

	#Ciclo DO WHILE
	echo "Ciclo DO WHILE<br><br>";
	$p = 0;

	do{
		echo $p."<br>";
		$p++;
	}while($p <= 5);

	echo "<br><br>";

	#Ciclo FOR
	echo "Ciclo FOR<br><br>";
	for ($i=0; $i <= 5; $i++) { 
		echo $i."<br>";
	}


?>