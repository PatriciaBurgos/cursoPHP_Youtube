<?php

	#Variable Numérica
	$numero = 5;
	echo "Esto es una variable numero: $numero<br>";
	var_dump($numero);
	echo "<br><br>";

	#Variable Texto
	$palabra = "palabra";
	echo "Esto es una variable texto: $palabra<br>";
	var_dump($palabra);
	echo "<br><br>";

	#Variable Booleana
	$bool = true;
	echo "Esto es una variable booleana: $bool<br>";
	var_dump($bool);
	echo "<br><br>";

	#Variable Array
	$colores = array("rojo", "azul");
	echo "Esto es una variable array: $colores[0]<br>";
	var_dump($colores);
	echo "<br><br>";

	#Variable Array con propiedades
	$verduras = array("verdura1" => "lechuga", "verdura2" => "calabaza");
	echo "Esto es una variable array con propiedades: $verduras[verdura2]<br>";
	var_dump($verduras);
	echo "<br><br>";

	#Variable Objeto
	$frutas = (object)["fruta1" => "manzana", "fruta2" => "uva"];
	echo "Esto es una variable objeto: $frutas->fruta2<br>";
	var_dump($frutas);
	echo "<br><br>";

?>