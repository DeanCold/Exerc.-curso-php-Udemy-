<?php

	$a = 55.0;

	$b = 55;

	var_dump($a > $b);
	echo "<br>";
	var_dump($a < $b);
	echo "<br>";
	var_dump($a == $b);
	echo "<br>";
	var_dump($a === $b); // 1 sinal de igual, atribui valor.
						// 2 sinais de igual, comparação.	
						// 3 sinais de igual, igualdade de // identidade, compara valor e tipo //de  variavel.
	echo "<br>";
	var_dump($a != $b);
	echo "<br>";
	var_dump($a !== $b);
?>