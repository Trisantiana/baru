<?php

// MEMASUKKAN FILE DBQUERY KE INDEX (HALAMAN INI)
include_once 'lib/koneksi.php';

$GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (isset($GET['act']) && $GET['act'] == 'del') {
    $params = array(':id' => $GET['id']);
    $sql = "delete from barang where id = :id";
	$pdo = $con->prepare($sql);
	$pdo->execute($params);
    	
}

header('location:menu1.php?hal=data-barang');
