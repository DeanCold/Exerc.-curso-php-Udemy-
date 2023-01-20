<?php
		//estou exportanto a funcao somar
		// do exemplo-01.php
//include "exemplo-01.php";
	//include tenta funciona
	// mesmo se não exista ou não esteja funcionando corretamente
	//existe o diretorio include path
	//se não existir ele vai no diretorio //padrão.interessante para intranet
	//include remoto tras de um site
	//perigoso pois pode ter virus



	require_once "exemplo-01.php";
	//require obriga que o arquivo exista
	// e que o arquivo esteja funcionando corretamente MELHOR FUNCIONALIDADE
	//require once TRAGA SOMENTE UMA VEZ
	//para evitar chamar o arquivo 2 vezes
$resultado = somar(10, 20);

	echo $resultado;
?>