<?php
try {
	$con = new PDO('pgsql:host=127.0.0.1;port=5432;dbname=integrado2024',
	'postgres', 'postgressssss');
} catch (PDOException $e) {
	echo 'DEU ERRADO!!!' . $e;
}

if ($con) {
	echo "deu cert";
	/*ler o banco de dados*/
	//comentario
}

?>

<html>
...
</htmL>
