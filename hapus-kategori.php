<?php
include_once 'lib/koneksi.php';

$GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (isset($GET['act']) && $GET['act'] == 'del') {
	$params = array (':id_kategori' => $GET['id_kategori']);
    $sql = "delete from kategori where id_kategori = :id_kategori";
	$pdo = $con->prepare($sql);
	$pdo->execute($params);
}

header ('location:menu1.php?hal=data-kategori');