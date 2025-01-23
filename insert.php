<?php
try {
	$con = new PDO('pgsql:host=127.0.0.1;port=5432;dbname=integrado2024',
	'postgres', 'postgres');
	
	if ($con) {
		$primeiro_nome = $_POST['nomelivro'];
		$tipo_livro    = $_POST['tipolivro'];
		$autor_livro   = $_POST['autorlivro'];
		$id_livro      = $_POST['idlivro'];
		
		$comando2 = "INSERT INTO livro VALUES ('$primeiro_nome', '$tipo_livro', '$autor_livro', $id_livro)";
		
		$con->exec($comando2);
	}
} catch (PDOException $e) {
	echo 'DEU ERRADO!!!' . $e;
}
?>