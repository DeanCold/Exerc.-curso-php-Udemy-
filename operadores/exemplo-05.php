<?php

	$a = 35;

	$b = 36;

	echo "Neste programinha caso o valor colocado na variavel<br></br> A for maior irá mostra o nº 1<br>
		A = B irá mostra 0<br> B for maior irá mostrar -1<br><br>A = $a e B = $b <br><br>";
	echo "Resultado: ";
	var_dump ($a <=> $b); // Spaceship	
						//Se $a > mostra "1" na tela
						//Se $a = $b mostra "0" na tela
						//Se $b > mostra "-1" na tela


?>