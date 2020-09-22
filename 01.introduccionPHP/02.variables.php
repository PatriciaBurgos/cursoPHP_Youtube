<?php

	#Variable Numérica
	$numero = 5;
	echo "Esto es una variable numero: $numero";
	echo "<br><br>";

	#Variable Texto
	$palabra = "palabra";
	echo "Esto es una variable texto: $palabra";
	echo "<br><br>";

	#Variable Booleana
	$bool = true;
	echo "Esto es una variable booleana: $bool";
	echo "<br><br>";

	#Variable Array
	$colores = array("rojo", "azul");
	echo "Esto es una variable array: $colores[0]";
	echo "<br><br>";

	#Variable Array con propiedades
	$verduras = array("verdura1" => "lechuga", "verdura2" => "calabaza");
	echo "Esto es una variable array con propiedades: $verduras[verdura2]";
	echo "<br><br>";

	#Variable Objeto
	$frutas = (object)["fruta1" => "manzana", "fruta2" => "uva"];
	echo "Esto es una variable objeto: $frutas->fruta2";
	echo "<br><br>";

?>