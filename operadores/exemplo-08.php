<?php
	//ordem de exe. dos operadores(Precedencias de operadores)
	$resultado = 10 + 3 / 2; //primeiro dividiu e depois somou
	$resulForcado = (10 + 3)/ 2; //Resolve primeio o que tem dentro dos parenteses.

	$resulComOpLogicoE = (10 + 3) / 2 > 5 && 10 + 5 < 20;

	$resulComOpLogicoOU = (10 + 3) / 2 > 20 || 10 + 5 < 3;

	echo $resultado . "<br>";

	echo $resulForcado . "<br>";

	var_dump($resulComOpLogicoE);
	echo "<br>";
	var_dump($resulComOpLogicoOU);
?>