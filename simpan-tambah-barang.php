<?php
 include_once 'lib/koneksi.php';
 
 $POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
 
 if(isset($POST['submit'])){
	 $params = array(
		//':id' => $POST['id'],
		':nama' => $POST['nama'],
		':kategori' => $POST['kategori'],
		':vendor' => $POST['vendor'],
		':tipe' => $POST['tipe'],
		':stok' => $POST['stok'],
		':harga_beli' => $POST['harga_beli'],
		':harga_jual' => $POST['harga_jual']
	);	
	$sql = "insert into barang values(null, :nama, :kategori, :vendor, :tipe, :stok, :harga_beli, :harga_jual )";
	$pdo = $con->prepare($sql);
	$pdo->execute($params);
	
	header('location:menu1.php?hal=data-barang');
}else{
		die("Missing parameter!");
 }
 