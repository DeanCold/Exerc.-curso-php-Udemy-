<?php 
	//inicial     final   incremento     
	for ($i = 0;  $i < 1000; $i+=10) {

			if($i >= 200 && $i <= 800) continue;//uma só instrução n precisa por chaves

			if($i === 900) break;
			echo $i . "<br>";
	}

?>