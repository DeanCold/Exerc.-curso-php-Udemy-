
	<form>
	<label>Nome</label>
	<input type="text" name="nome">
	<br>
	<br>
	<label>Data de Nascimento</label>
	<input type="date" name="nascimento">
	<input type="submit" value="OK">	
	<form/>
<?php
	
		if(isset($_GET)){
		foreach ($_GET as $key => $value) {
			
			echo "<br><br>". " Nome do campo: " . $key;

			echo  "<br>". " Valor do campo: " . $value;

			echo "<hr>";
		}

	}

?>