<!-- back end configuração do SGBD a ser utilizado -->

<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'db_loja');

	$conn = new MySQLi(HOST, USER, PASS, BASE);

?>