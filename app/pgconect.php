<?php
$dbconn = pg_connect("host=localhost
					  port=5432 
					  dbname=mayacrow
					  user=postgres 
					  password=0000")
or die('No se ha podido conectar: ' . pg_last_error());
?>