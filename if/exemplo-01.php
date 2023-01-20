<?php
	//Estrutura de condição
	$idadeCrianca = 12;
	$idadeAdulto = 18;
	$idadeIdoso = 60;

	$idadeUser = 61;


	if($idadeUser < $idadeCrianca) {
		echo "Você é uma criança!";
	}else if ($idadeUser < $idadeAdulto){
		echo "Você é um adolescente!";
	}else if ($idadeUser < $idadeIdoso){
		echo "Você é um Adulto!";
	}else {
		echo "Você é um senhor de Idade!";
	}

	echo "<br>";

		//operador ternario direto no echo
	echo($idadeUser < $idadeAdulto)?"Menor de idade":"Maior de idade";
							//? é Então faça
							//: se não for
							// utilizar em condições simples

?>