<?php
try {
	$con = new PDO('pgsql:host=127.0.0.1;port=5432;dbname=integrado2024',
	'postgres', 'postgres');
	
	if ($con) {
		echo "deu certo";
		$comando1 = $con->query("SELECT * FROM livro");
		
		while ($var_linha = $comando1->fetch()) {
			echo $var_linha[1] . "<br/>";	
		}
	}
} catch (PDOException $e) {
	echo 'DEU ERRADO!!!' . $e;
}
?>

<html>
	<br> 	 
	<form action="insert.php" method="post">
		<label> Digite o nome do livro: </label>
		<input type="text" name="nomelivro" id="nomelivro">
		<input type="text" name="autorlivro" id="autorlivro">
		<input type="text" name="tipolivro" id="tipolivro">
		<input type="text" name="idlivro" id="idlivro">
	
		<input type="submit" name="adicionarlivro" value="clique em mim">

	</form>
</htmL>








