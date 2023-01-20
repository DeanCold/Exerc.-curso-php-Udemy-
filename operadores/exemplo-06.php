<?php
	//operador comparação (null collection)tratar valor nulo
	// neste caso está mostrando  o valor que não é null
	$a = NULL;

	$b = NULL;

	$c = 10;

	echo $a ?? $b ?? $c;
?>