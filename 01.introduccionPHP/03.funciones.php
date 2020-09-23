<?php

	#Funcion sin parámetros
	function saludo () {
		echo "hola<br>";
	}

	saludo();


	#Función con parámetros
	function adios ($adios){
		echo $adios."<br>";
	}

	adios("adios");


	#Funciones con retorno
	function retorno ($retornar){
		return $retornar;
	}

	echo retorno("retornar");

?>