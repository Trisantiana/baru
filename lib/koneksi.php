<?php
try {
	$con = new PDO("mysql:host=127.0.0.1;dbname=db_penjualan", 'root', '');
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOExceptioon $ex) {
	die("Connection Failed! :" . $ex->getMessage());
}
?> 