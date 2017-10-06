<?php

// MEMASUKKAN FILE DBQUERY KE INDEX (HALAMAN INI)
include_once 'lib/koneksi.php';

$GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (isset($GET['act']) && $GET['act'] == 'del') {
    $params = array(':id_user' => $GET['id_user']);
    $sql = "delete from user where id_user = :id_user";
	$pdo = $con->prepare($sql);
	$pdo->execute($params);
    	
}

header('location:menu1.php?hal=data-user');
