<?php

include_once 'lib/koneksi.php';

$POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($POST['submit'])) {
	$params = array (
		':id_kategori' => $POST['id_kategori'],
		':kategori' => $POST['kategori']
		);
	$sql = "update kategori set
	kategori = :kategori where id_kategori = :id_kategori";
	$pdo = $con->prepare($sql);
	$pdo->execute($params);
	header('location:menu1.php?hal=data-kategori');
}else {
	echo "<script>Maaf, data tidak lengkap! </script";
}

header('location:menu1.php?hal=data-kategori');
?>