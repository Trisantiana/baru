<?php
include_once 'lib/koneksi.php';

$POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (isset($POST['submit'])) {
	$params = array (
		':id_kategori' => $POST['id_kategori'],
		':kategori' => $POST['kategori']
		);
	$sql = "insert into kategori values ( :id_kategori, :kategori)";
	$pdo = $con->prepare($sql);
	$pdo->execute ($params);

	header('location:menu1.php?hal=data-kategori');
}else {
	die ('Missing Parameter!');
}  
