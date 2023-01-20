<?php

	$frase = "A repetição é a mãe da retenção.";

	$palavra = "mãe";

	$q = strpos($frase, $palavra); //procura uma palavra na frase

	$texto = substr($frase, 0, $q);
	//imprimi do ponto 0 até o ponto 19 var $q

	var_dump($texto);
	var_dump($q);

	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); //esse q+ strLen está pulando a word mae. 
	//strlen conta a string 

	echo "<br>";
	var_dump($texto2);
?>