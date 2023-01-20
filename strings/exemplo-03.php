<?php

	$empresa = "Hcode";

	echo $empresa . "<br>";

	$empresa = str_replace("o", "0", $empresa);
	//está trocando a letra o pelo 0.
	$empresa = str_replace("e", "3", $empresa);
	echo $empresa;
?>