<?php

// MEMASUKKAN FILE DBQUERY KE INDEX (HALAMAN INI)
include_once 'lib/koneksi.php';

$GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (isset($GET['act']) && $GET['act'] == 'del') {
    $params = array(':id_suplier' => $GET['id_suplier']);
    $sql = "delete from suplier where id_suplier = :id_suplier";
	$pdo = $con->prepare($sql);
	$pdo->execute($params);
    	
}

header('location:menu1.php?hal=data-suplier');
