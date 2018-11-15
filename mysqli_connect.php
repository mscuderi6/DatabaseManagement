<?php
DEFINE('DB_USER', 'students');
DEFINE("DB_PASSWORD', 'maggie");
DEFINE('DB_HOST', 'localhost');
DEFINE( 'DB_NAME', 'test1');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR dies('Could not connect to mySQL: ' .
	mysqli_connect_error());

?>
